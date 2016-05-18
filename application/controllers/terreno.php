<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terreno extends CI_Controller {

	public function __construct() {
		parent::__construct();
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
		
	}
}

