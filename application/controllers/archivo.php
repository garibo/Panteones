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

	public function ver($id)
	{
		$basicos 		= $this->db->get_where('difuntos', 		array('id' => $id))->result_array();
		$pagos 			= $this->db->get_where('pagos', 		array('id_difunto' => $id))->result_array();
		$permisos		= $this->db->get_where('permisos', 		array('id_difunto' => $id))->result_array();
		$localizacion 	= $this->db->get_where('localizacion', 	array('id_difunto' => $id))->result_array();
		$data['nombre'] = $basicos[0]['nombre_finado'];
		$data['fecha_archivo'] 			= $basicos[0]['fecha_archivo'];
		$data['fecha_fallecimiento'] 	= $basicos[0]['fecha_fallecimiento'];
		$data['nombre_familiar'] 		= $basicos[0]['nombre_familiar'];
		$data['observaciones'] 			= $basicos[0]['observaciones'];
		$data['peticiones'] 			= $basicos[0]['peticiones'];

		$data['fecha_pago'] 			= $pagos[0]['fecha_pago'];
		$data['nrecibo'] 				= $pagos[0]['nrecibo'];
		$data['cantidad'] 				= $pagos[0]['cantidad'];
		$data['referendo'] 				= $pagos[0]['referendo'];

		$data['perp'] 					= $permisos[0]['perp'];
		$data['exh'] 					= $permisos[0]['exh'];
		$data['pert'] 					= $permisos[0]['pert'];
		$data['const'] 					= $permisos[0]['const'];
		$data['cond'] 					= $permisos[0]['cond'];

		$data['lt'] 					= $localizacion[0]['lt'];
		$data['mz'] 					= $localizacion[0]['mz'];
		$data['sec'] 					= $localizacion[0]['sec'];
		$data['fila'] 					= $localizacion[0]['fila'];
		$data['panteon'] 				= $localizacion[0]['panteon'];
		$data['domicilio'] 				= $localizacion[0]['domicilio'];

		$this->load->view('header');
		$this->load->view('vista', $data);
		
	}
}

