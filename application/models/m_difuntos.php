<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class M_Difuntos extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	public function getData($id){
		$basicos 		= $this->db->get_where('difuntos', 		array('id' => $id))->result_array();
		$pagos 			= $this->db->get_where('pagos', 		array('id_difunto' => $id))->result_array();
		$permisos		= $this->db->get_where('permisos', 		array('id_difunto' => $id))->result_array();
		$localizacion 	= $this->db->get_where('localizacion', 	array('id_difunto' => $id))->result_array();
		$data['id'] 					= $id;
		$data['nombre'] 				= $basicos[0]['nombre_finado'];
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

		return $data;
	}

	public function getOverview()
	{
		$query = $this->db->get('overview');
		return $this->output->set_content_type('application/json')->set_output(json_encode($query->result()));
	}

	public function getDifunto($id)
	{
		$basicos = $this->db->get_where('difuntos', array('id' => $id))->result_array();
		$data['nombre'] 				= $basicos[0]['nombre_finado'];
		$data['id'] 					= $id;
		$data['genero'] 				= $basicos[0]['genero'];
		$data['fecha_archivo'] 			= $basicos[0]['fecha_archivo'];
		$data['fecha_fallecimiento'] 	= $basicos[0]['fecha_fallecimiento'];
		$data['nombre_familiar'] 		= $basicos[0]['nombre_familiar'];
		$data['observaciones'] 			= $basicos[0]['observaciones'];
		$data['peticiones'] 			= $basicos[0]['peticiones'];

		return $data;
	}

	public function getPagos($id)
	{
		$pagos = $this->db->get_where('pagos', array('id_difunto' => $id))->result_array();
		$permisos = $this->db->get_where('permisos', array('id_difunto' => $id))->result_array();
		
		$data['id'] 					= $id;
		$data['fecha_pago'] 			= $pagos[0]['fecha_pago'];
		$data['nrecibo'] 				= $pagos[0]['nrecibo'];
		$data['cantidad'] 				= $pagos[0]['cantidad'];
		$data['referendo'] 				= $pagos[0]['referendo'];

		$data['perp'] 					= $permisos[0]['perp'] == 1 ? "checked" : "";
		$data['exh'] 					= $permisos[0]['exh'] == 1 ? "checked" : "";
		$data['pert'] 					= $permisos[0]['pert'] == 1 ? "checked" : "";
		$data['const'] 					= $permisos[0]['const'] == 1 ? "checked" : "";
		$data['cond'] 					= $permisos[0]['cond'] == 1 ? "checked" : "";

		return $data;
	}

	public function getLocalizacion($id)
	{
		$localizacion 	= $this->db->get_where('localizacion', 	array('id_difunto' => $id))->result_array();
		$data['id'] 					= $id;
		$data['tomado'] 				= false;
		$data['lt'] 					= $localizacion[0]['lt'];
		$data['mz'] 					= $localizacion[0]['mz'];
		$data['sec'] 					= $localizacion[0]['sec'];
		$data['fila'] 					= $localizacion[0]['fila'];
		$data['panteon'] 				= $localizacion[0]['panteon'];
		$data['domicilio'] 				= $localizacion[0]['domicilio'];
		return $data;
	}
}