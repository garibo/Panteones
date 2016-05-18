<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terreno extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('terrenos');
	}

	public function nuevo()
	{
		$this->load->view('header');		
		$this->load->view('nuevo_terreno');		
	}

	public function getData()
	{
		$query = $this->db->get('terrenos');
		return $this->output->set_content_type('application/json')->set_output(json_encode($query->result()));
	}

	public function addTerreno()
	{
		$this->form_validation->set_rules('lt', 'Lote', 'trim|required|numeric');
		$this->form_validation->set_rules('mz', 'Manzana', 'trim|required|numeric');
		$this->form_validation->set_rules('sec', 'Seccion', 'trim|required|numeric');
		$this->form_validation->set_rules('fila', 'Fila', 'trim|required|numeric');
		$this->form_validation->set_rules('domicilio', 'Domicilio', 'trim|required|max_length[120]');
		$this->form_validation->set_rules('nombre_apartante', 'Nombre apartante', 'trim|required|max_length[120]');

		$this->form_validation->set_message('required', 'Este campo es requerido');
		$this->form_validation->set_message('numeric', 'Este campo solo acepta números');
		$this->form_validation->set_message('max_length','No puede exceder de <span class="hide">%d</span>%d caracteres');
		$this->form_validation->set_message('min_length', 'Este campo debe tener mínimo <span class="hide">%d</span>%d caracteres');
		$this->form_validation->set_message('exact_length', 'Este campo debe tener <span class="hide">%d</span>%d caracteres');

		$this->form_validation->set_error_delimiters('','');
		if($this->form_validation->run() == FALSE) {

			$this->load->view('header');		
			$this->load->view('nuevo_terreno');	
			$this->load->view('footer');

		}else {
			$data = array(
				"lt"				=> $this->input->post("lt"),
				"mz" 				=> $this->input->post("mz"),
				"sec" 				=> $this->input->post("sec"),
				"fila" 				=> $this->input->post("fila"),
				"panteon" 			=> $this->input->post("panteon"),
				"nombre_apartante" 	=> $this->input->post("nombre_apartante"),
				"estado" 			=> $this->input->post("estado") == 'on' ? 1 : 0,
				"domicilio" 		=> $this->input->post("domicilio")
			);

			if($this->db->insert('terrenos', $data))
			{
				redirect(base_url("terreno/exito"));
			}
		}
	}

	public function exito()
	{
		$this->load->view('header');
		$this->load->view('terrenos');
		$this->load->view('footer');		
		$this->load->view('exito_apartado');
	}
}

