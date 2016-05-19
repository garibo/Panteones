<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estadistica extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model("m_estadisticas");
		$this->load->helper('form');
	}

	public function index()
	{
		if($this->session->userdata('logger') == TRUE){
			
		}else{
		redirect(base_url('login/'));
		}
		$this->load->view('header');
		$this->load->view('estadisticas');
		$this->load->view('footer');
	}

	public function panteon()
	{
		$blas = $this->db->get_where('localizacion', array('panteon' => 'Panteon San blas'))->num_rows();
		$pedro = $this->db->get_where('localizacion', array('panteon' => 'Panteon san pedro'))->num_rows();
		$datos = array();
		$datos = array(
				'blas' => $blas,
				'pedro' => $pedro
			);
		$send = json_encode($datos);
		echo $send;	
	}

	public function mes()
	{
		$datos = array();
		$meses = [1 =>'Enero',2=>'Febrero',3=>'Marzo',4=>'Abril',5=>'Mayo',6=>'Junio',7=>'Julio',8=>'Agosto',9=>'Septiembre',10=>'Octubre',11=>'Noviembre',12=>'Diciembre'];
		$ind = date("n");
		for ($i=0; $i < 7; $i++) 
		{ 
			$datos[$i] = array(
				'mes' => $meses[$ind],
				'cantidad' => $this->m_estadisticas->getMes($ind)
			);
			$ind--;
			if($ind == 0)
			{
				$ind = 12;
			}
		}
		
		$send = json_encode(array_reverse($datos));
		echo $send;	
	}

	public function genero()
	{
		$m = $this->db->get_where('difuntos', array('genero' => 'masculino'))->num_rows();
		$f = $this->db->get_where('difuntos', array('genero' => 'femenino'))->num_rows();
		$datos = array();
		$datos = array(
				'masculino' => $m,
				'femenino' => $f
			);
		$send = json_encode($datos);
		echo $send;	
	}

	public function archivo()
	{
		$datos = array();
		$meses = [1 =>'Enero',2=>'Febrero',3=>'Marzo',4=>'Abril',5=>'Mayo',6=>'Junio',7=>'Julio',8=>'Agosto',9=>'Septiembre',10=>'Octubre',11=>'Noviembre',12=>'Diciembre'];
		$ind = date("n");
		for ($i=0; $i < 7; $i++) 
		{ 
			$datos[$i] = array(
				'mes' => $meses[$ind],
				'cantidad' => $this->m_estadisticas->getArchivo($ind)
			);
			$ind--;
			if($ind == 0)
			{
				$ind = 12;
			}
		}
		
		$send = json_encode(array_reverse($datos));
		echo $send;	
	}

}

