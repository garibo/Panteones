<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archivo extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('m_difuntos');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('tabla');
		$this->load->view('footer');
	}

	public function getrows()
	{
		$this->m_difuntos->getOverview();
	}

	public function ver($id)
	{
		$data = $this->m_difuntos->getData($id);
		$this->load->view('header');
		$this->load->view('vista', $data);		
	}

	public function editardifunto($id)
	{
		$data = $this->m_difuntos->getDifunto($id);
		$this->load->view('header');
		$this->load->view('editar_difunto', $data);
	}

	public function editarpagos($id)
	{
		$data = $this->m_difuntos->getPagos($id);
		$this->load->view('header');
		$this->load->view('editar_pago', $data);
	}

	public function editarlocalizacion($id)
	{
		$data = $this->m_difuntos->getLocalizacion($id);
		$this->load->view('header');
		$this->load->view('editar_localizacion', $data);
	}

	public function updateDifunto($id)
	{
		$this->form_validation->set_rules('fecha_archivo', 'Fecha de archivo', 'required');
		$this->form_validation->set_rules('fecha_fallecimiento', 'Fecha de fallecimiento', 'required');
		$this->form_validation->set_rules('nombre_finado', 'Nombre del finado', 'required|max_length[65]');
  		$this->form_validation->set_rules('nombre_familiar', 'Nombre del familiar', 'required|max_length[65]');
		$this->form_validation->set_rules('observaciones', 'Observaciones', 'required|max_length[65]');
		$this->form_validation->set_rules('peticiones', 'Peticiones', 'required|max_length[65]');

		$this->form_validation->set_message('required', 'Este campo es requerido');
		$this->form_validation->set_message('numeric', 'Este campo solo acepta números');
		$this->form_validation->set_message('max_length','No puede exceder de <span class="hide">%d</span>%d caracteres');
		$this->form_validation->set_message('min_length', 'Este campo debe tener mínimo <span class="hide">%d</span>%d caracteres');
		$this->form_validation->set_message('exact_length', 'Este campo debe tener <span class="hide">%d</span>%d caracteres');

		$this->form_validation->set_error_delimiters('','');
		if($this->form_validation->run() == FALSE) {
			$data = $this->m_difuntos->getDifunto($id);
			$this->load->view('header');
			$this->load->view('editar_difunto', $data);
		}else {
			$data = array(
			  	"fecha_archivo" 		=> $this->input->post("fecha_archivo"),
				"fecha_fallecimiento" 	=> $this->input->post("fecha_fallecimiento"),
				"nombre_finado" 		=> $this->input->post("nombre_finado"),
				"nombre_familiar"		=> $this->input->post("nombre_familiar"),
				"observaciones" 		=> $this->input->post("observaciones"),
				"peticiones" 			=> $this->input->post("peticiones")
			);

			$this->db->where('id', $id);
			if($this->db->update('difuntos', $data))
			{
				redirect(base_url("archivo/ver/".$id));
			}
		}
	}

	public function updatePago($id)
	{
		$this->form_validation->set_rules('fecha_pago', 'Fecha de pago', 'trim|required');
		$this->form_validation->set_rules('nrecibo', 'Numero de recibo', 'trim|required|numeric');
		$this->form_validation->set_rules('cantidad', 'Cantidad', 'trim|required|numeric');
		$this->form_validation->set_rules('referendo', 'Referendo', 'trim|required|numeric');

		$this->form_validation->set_message('required', 'Este campo es requerido');
		$this->form_validation->set_message('numeric', 'Este campo solo acepta números');
		$this->form_validation->set_message('max_length','No puede exceder de <span class="hide">%d</span>%d caracteres');
		$this->form_validation->set_message('min_length', 'Este campo debe tener mínimo <span class="hide">%d</span>%d caracteres');
		$this->form_validation->set_message('exact_length', 'Este campo debe tener <span class="hide">%d</span>%d caracteres');

		$this->form_validation->set_error_delimiters('','');
		if($this->form_validation->run() == FALSE) {

			$data = $this->m_difuntos->getPagos($id);
			$this->load->view('header');
			$this->load->view('editar_pago', $data);

		}else {

			$data_pagos = array(
				"fecha_pago" 	=> $this->input->post("fecha_pago"),
				"nrecibo" 		=> $this->input->post("nrecibo"),
				"cantidad" 		=> $this->input->post("cantidad"),
				"referendo" 	=> $this->input->post("referendo"),
				"id_difunto" 	=> $id,
			);

			$data_permisos = array(
				"id_difunto" 	=> $id,
				"perp" 			=> $this->input->post("perp") 	== 'on' ? 1 : 0,
				"exh" 			=> $this->input->post("exh") 	== 'on' ? 1 : 0,
				"pert" 			=> $this->input->post("pert") 	== 'on' ? 1 : 0,
				"const" 		=> $this->input->post("const") 	== 'on' ? 1 : 0,
				"cond" 			=> $this->input->post("cond") 	== 'on' ? 1 : 0
			);

			$this->db->where('id', $id);
			if($this->db->update('pagos', $data_pagos))
			{
				$this->db->where('id', $id);
				if($this->db->update('permisos', $data_permisos))
				{
					redirect(base_url("archivo/ver/".$id));
				}
			}
		}
	}

	public function updateLocalizacion($id)
	{
		$this->form_validation->set_rules('lt', 'Lote', 'trim|required|numeric');
		$this->form_validation->set_rules('mz', 'Manzana', 'trim|required|numeric');
		$this->form_validation->set_rules('sec', 'Seccion', 'trim|required|numeric');
		$this->form_validation->set_rules('fila', 'Fila', 'trim|required|numeric');
		$this->form_validation->set_rules('domicilio', 'Domicilio', 'trim|required|max_length[120]');

		$this->form_validation->set_message('required', 'Este campo es requerido');
		$this->form_validation->set_message('numeric', 'Este campo solo acepta números');
		$this->form_validation->set_message('max_length','No puede exceder de <span class="hide">%d</span>%d caracteres');
		$this->form_validation->set_message('min_length', 'Este campo debe tener mínimo <span class="hide">%d</span>%d caracteres');
		$this->form_validation->set_message('exact_length', 'Este campo debe tener <span class="hide">%d</span>%d caracteres');

		$this->form_validation->set_error_delimiters('','');
		if($this->form_validation->run() == FALSE) {

			$data = $this->m_difuntos->getLocalizacion($id);
			$this->load->view('header');
			$this->load->view('editar_localizacion', $data);

		}else {
			$data = array(
				"id_difunto" 	=> $id,
				"lt"			=> $this->input->post("lt"),
				"mz" 			=> $this->input->post("mz"),
				"sec" 			=> $this->input->post("sec"),
				"fila" 			=> $this->input->post("fila"),
				"domicilio" 	=> $this->input->post("domicilio")
			);

			$this->db->where('id', $id);
			if($this->db->update('localizacion', $data))
			{
				redirect(base_url("archivo/ver/".$id));
			}
		}

	}

	public function eliminar($id)
	{
		$this->db->trans_start();
		$this->db->delete('localizacion', array('id_difunto' => $id));
		$this->db->delete('permisos', array('id_difunto' => $id));
		$this->db->delete('pagos', array('id_difunto' => $id));
		$this->db->delete('difuntos', array('id' => $id));
		$this->db->trans_complete();
		redirect(base_url("archivo"));
	}
}

