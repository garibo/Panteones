<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajustes extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->database();
		$this->load->model("m_ajustes");
		$this->load->library('form_validation');
	}

	public function index()
	{
		if($this->session->userdata('logger') == TRUE){
			
		}else{
		redirect(base_url('login/'));
		}
		$this->load->view('header');
		$this->load->view('ajustes');
	}

	public function change()
	{
		$this->form_validation->set_rules('correo', 'Correo Electrónico', 'trim|required|valid_email');
		$this->form_validation->set_rules('contra', 'Contraseña', 'trim|required');
		$this->form_validation->set_rules('nueva', 'nueva contraseña', 'trim|required');
		$this->form_validation->set_rules('nueva_2', 'repetir contraseña', 'trim|required');

		$this->form_validation->set_message('required', '%s requerido/a.');
		$this->form_validation->set_message('valid_email', 'El %s es inválido.');

		$this->form_validation->set_error_delimiters(',');
		if($this->form_validation->run() == FALSE){
			$this->load->view('header');
			$this->load->view('ajustes');
			$this->load->view('footer');
		}else{
			if($this->m_ajustes->desencriptador() == $this->input->post("contra") && $this->input->post("nueva") == $this->input->post("nueva_2"))
			{
				$this->m_ajustes->encriptador($this->input->post("nueva"));
				$this->load->view('header');
				$this->load->view('ajustes');
				$this->load->view('exito');
			}
		}
	}

	public function salir()
	{
		$this->session->unset_userdata();
      	$this->session->sess_destroy();
      	redirect(base_url());
	}
	
}

