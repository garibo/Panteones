<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archivo extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('tabla');
		$this->load->view('footer');
	}

	public function getrows()
	{
		$query = $this->db->get('overview');
		$this->output->set_content_type('application/json')->set_output(json_encode($query->result()));
	}

	public function editar($id)
	{
		
	}
}

