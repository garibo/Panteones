<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->database();
	}

	public function index()
	{
		// if($this->session->userdata('logger') == TRUE){
			
		// }else{
		// redirect(base_url('login/'));
		// }

		$this->load->view('header');
		$this->load->view('registro');
		$this->load->view('footer');
	}

	public function pagos($id)
	{
		$data['id'] = $id;
		$this->load->view('header');
		$this->load->view('pago', $data);
		$this->load->view('footer');
	}

	public function localizacion($id)
	{
		$data['tomado'] = false;
		$data['id'] = $id;
		$this->load->view('header');
		$this->load->view('localizacion', $data);
		$this->load->view('footer');
	}

	public function addDifunto()
	{
		$this->form_validation->set_rules('fecha_archivo', 'Fecha de archivo', 'trim|required');
		$this->form_validation->set_rules('fecha_fallecimiento', 'Fecha de fallecimiento', 'trim|required');
		$this->form_validation->set_rules('nombre_finado', 'Nombre del finado', 'trim|required|max_length[65]');
		$this->form_validation->set_rules('genero', 'Genero', 'trim|required');
		$this->form_validation->set_rules('nombre_familiar', 'Nombre del familiar', 'trim|required|max_length[65]');
		$this->form_validation->set_rules('observaciones', 'Observaciones', 'trim|required|max_length[65]');
		$this->form_validation->set_rules('peticiones', 'Peticiones', 'trim|required|max_length[65]');

		$this->form_validation->set_message('required', 'Este campo es requerido');
		$this->form_validation->set_message('numeric', 'Este campo solo acepta números');
		$this->form_validation->set_message('max_length','No puede exceder de <span class="hide">%d</span>%d caracteres');
		$this->form_validation->set_message('min_length', 'Este campo debe tener mínimo <span class="hide">%d</span>%d caracteres');
		$this->form_validation->set_message('exact_length', 'Este campo debe tener <span class="hide">%d</span>%d caracteres');

		$this->form_validation->set_error_delimiters('','');
		if($this->form_validation->run() == FALSE) {

			$this->load->view('header');
			$this->load->view('registro');
			$this->load->view('footer');

		}else {
			$data = array(
			  	"fecha_archivo" 		=> $this->input->post("fecha_archivo"),
				"fecha_fallecimiento" 	=> $this->input->post("fecha_fallecimiento"),
				"nombre_finado" 		=> $this->input->post("nombre_finado"),
				"genero" 				=> $this->input->post("genero"),
				"nombre_familiar"		=> $this->input->post("nombre_familiar"),
				"observaciones" 		=> $this->input->post("observaciones"),
				"peticiones" 			=> $this->input->post("peticiones")
			);

			if($this->db->insert('difuntos', $data))
			{
				redirect(base_url("registro/pagos/".$this->db->insert_id()));
			}
		}

	}

	public function addPago($id)
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

			$data['id'] = $id;
			$this->load->view('header');
			$this->load->view('pago', $data);
			$this->load->view('footer');

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

			if($this->db->insert('pagos', $data_pagos) && $this->db->insert('permisos', $data_permisos))
			{
				redirect(base_url("registro/localizacion/".$id));
			}
		}


	}

	public function addLocalizacion($id)
	{
		$data['tomado'] = false;
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

			$data['id'] = $id;
			$this->load->view('header');
			$this->load->view('localizacion', $data);
			$this->load->view('footer');

		}else {
			$data = array(
				"id_difunto" 	=> $id,
				"id" 	=> $id,
				"lt"			=> $this->input->post("lt"),
				"mz" 			=> $this->input->post("mz"),
				"sec" 			=> $this->input->post("sec"),
				"fila" 			=> $this->input->post("fila"),
				"panteon" 			=> $this->input->post("panteon"),
				"domicilio" 	=> $this->input->post("domicilio")
			);

			$data2 = array(
				"lt"				=> $this->input->post("lt"),
				"mz" 				=> $this->input->post("mz"),
				"sec" 				=> $this->input->post("sec"),
				"fila" 				=> $this->input->post("fila"),
				"panteon" 			=> $this->input->post("panteon")
			);

			if($this->db->get_where('terrenos', $data2)->num_rows() == 0 && $this->db->get_where('localizacion', $data2)->num_rows() == 0)
			{
				if($this->db->insert('localizacion', $data))
				{
					redirect(base_url("registro/exito"));
				}			
			}
			else 
			{
				$data['tomado'] = true;
				$this->load->view('header');		
				$this->load->view('localizacion', $data);	
				$this->load->view('footer');
			}			
		}

	}

	public function exito()
	{
			$this->load->view('header');
			$this->load->view('registro');
			$this->load->view('footer');		
			$this->load->view('exito');
	}
}
?>
