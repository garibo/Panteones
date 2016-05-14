<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->database();
	}

	public function index()
	{
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
		$data['id'] = $id;
		$this->load->view('header');
		$this->load->view('localizacion', $data);
		$this->load->view('footer');
	}

	public function addDifunto()
	{
		$data = array(
		  	"fecha_archivo" 		=> $this->input->post("fecha_archivo"),
			"fecha_fallecimiento" 	=> $this->input->post("fecha_fallecimiento"),
			"nombre_finado" 		=> $this->input->post("nombre_finado"),
			"nombre_familiar"		=> $this->input->post("nombre_familiar"),
			"observaciones" 		=> $this->input->post("observaciones"),
			"peticiones" 			=> $this->input->post("peticiones")
		);

		if($this->db->insert('difuntos', $data))
		{
			redirect(base_url("registro/pagos/".$this->db->insert_id()));
		}
	}

	public function addPago($id)
	{
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

	public function addLocalizacion($id)
	{
		$data = array(
			"id_difunto" 	=> $id,
			"lt"			=> $this->input->post("lt"),
			"mz" 			=> $this->input->post("mz"),
			"sec" 			=> $this->input->post("sec"),
			"fila" 			=> $this->input->post("fila"),
			"panteon" 			=> $this->input->post("panteon"),
			"domicilio" 	=> $this->input->post("domicilio")
		);

		if($this->db->insert('localizacion', $data))
		{
			redirect(base_url("registro/exito"));
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
