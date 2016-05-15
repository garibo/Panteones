<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class M_Estadisticas extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	public function index()
	{

	}

	public function getMes($mes)
	{
		$resultado = $this->db->query("SELECT COUNT(*) AS cantidad FROM difuntos WHERE MONTH(fecha_fallecimiento) = $mes");
		$resultado = $resultado->result();
		return $resultado[0]->cantidad;
	}

	public function getArchivo($mes)
	{
		$resultado = $this->db->query("SELECT COUNT(*) AS cantidad FROM difuntos WHERE MONTH(fecha_archivo) = $mes");
		$resultado = $resultado->result();
		return $resultado[0]->cantidad;
	}
}
?>