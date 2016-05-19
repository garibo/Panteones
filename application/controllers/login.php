<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper("form");
		$this->load->model("m_ajustes");
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function addLogin()
	{
		if($this->m_ajustes->getEmail() == $this->input->post('email') && $this->m_ajustes->desencriptador() == $this->input->post('password'))
		{
			$dato = array(
				'logger' => TRUE, 
				'email' => $this->m_ajustes->getEmail()
			);
			$this->session->set_userdata($dato);
			redirect(base_url('registro'));				
		}
		else
		{
			$this->load->view('login');
			$this->load->view('mal');
		}
	}
}
