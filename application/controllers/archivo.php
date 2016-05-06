<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archivo extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('m_difuntos');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('tabla');
		$this->load->view('footer');
	}

	public function getrows()
	{
		$this->m_difuntos->getOverview();
	}

	public function ver($id)
	{
		$data = $this->m_difuntos->getData($id);
		$this->load->view('header');
		$this->load->view('vista', $data);		
	}

	public function editardifunto($id)
	{
		$data = $this->m_difuntos->getDifunto($id);
		$this->load->view('header');
		$this->load->view('editar_difunto', $data);
	}

	public function editarpagos($id)
	{
		$data = $this->m_difuntos->getPagos($id);
		$this->load->view('header');
		$this->load->view('editar_pago', $data);
	}

	public function editarlocalizacion($id)
	{
		$data = $this->m_difuntos->getLocalizacion($id);
		$this->load->view('header');
		$this->load->view('editar_localizacion', $data);
	}
}

