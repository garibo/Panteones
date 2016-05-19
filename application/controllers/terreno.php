<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terreno extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->database();
	}

	public function index()
	{
		if($this->session->userdata('logger') == TRUE){
			
		}else{
		redirect(base_url('login/'));
		}
		$this->load->view('header');
		$this->load->view('terrenos');
	}

	public function nuevo()
	{
		$data['tomado'] = false;
		$this->load->view('header');		
		$this->load->view('nuevo_terreno', $data);		
	}

	public function getData()
	{
		$query = $this->db->get('terrenos');
		return $this->output->set_content_type('application/json')->set_output(json_encode($query->result()));
	}

	public function addTerreno()
	{
		$data['tomado'] = false;
		$this->form_validation->set_rules('lt', 'Lote', 'trim|required|numeric');
		$this->form_validation->set_rules('mz', 'Manzana', 'trim|required|numeric');
		$this->form_validation->set_rules('sec', 'Seccion', 'trim|required|numeric');
		$this->form_validation->set_rules('fila', 'Fila', 'trim|required|numeric');
		$this->form_validation->set_rules('domicilio', 'Domicilio', 'trim|required|max_length[120]');
		$this->form_validation->set_rules('nombre_apartante', 'Nombre apartante', 'trim|required|max_length[120]');

		$this->form_validation->set_message('required', 'Este campo es requerido');
		$this->form_validation->set_message('numeric', 'Este campo solo acepta números');
		$this->form_validation->set_message('max_length','No puede exceder de <span class="hide">%d</span>%d caracteres');
		$this->form_validation->set_message('min_length', 'Este campo debe tener mínimo <span class="hide">%d</span>%d caracteres');
		$this->form_validation->set_message('exact_length', 'Este campo debe tener <span class="hide">%d</span>%d caracteres');

		$this->form_validation->set_error_delimiters('','');
		if($this->form_validation->run() == FALSE) {

			$this->load->view('header');		
			$this->load->view('nuevo_terreno', $data);	
			$this->load->view('footer');

		}else {
			$data = array(
				"lt"				=> $this->input->post("lt"),
				"mz" 				=> $this->input->post("mz"),
				"sec" 				=> $this->input->post("sec"),
				"fila" 				=> $this->input->post("fila"),
				"panteon" 			=> $this->input->post("panteon"),
				"nombre_apartante" 	=> $this->input->post("nombre_apartante"),
				"estado" 			=> $this->input->post("estado") == 'on' ? 1 : 0,
				"domicilio" 		=> $this->input->post("domicilio")
			);

			$data2 = array(
				"lt"				=> $this->input->post("lt"),
				"mz" 				=> $this->input->post("mz"),
				"sec" 				=> $this->input->post("sec"),
				"fila" 				=> $this->input->post("fila"),
				"panteon" 			=> $this->input->post("panteon")
			);

			if($this->db->get_where('terrenos', $data2)->num_rows() == 0 && $this->db->get_where('localizacion', $data2)->num_rows() == 0)
			{
				if($this->db->insert('terrenos', $data))
				{
					redirect(base_url("terreno/exito"));
				}				
			}
			else 
			{
				$data['tomado'] = true;
				$this->load->view('header');		
				$this->load->view('nuevo_terreno', $data);	
				$this->load->view('footer');
			}
		}
	}

	public function ver($id)
	{
		$localizacion 	= $this->db->get_where('terrenos', 	array('id' => $id))->result_array();
		$data['id'] 					= $id;
		$data['lt'] 					= $localizacion[0]['lt'];
		$data['mz'] 					= $localizacion[0]['mz'];
		$data['sec'] 					= $localizacion[0]['sec'];
		$data['fila'] 					= $localizacion[0]['fila'];
		$data['panteon'] 				= $localizacion[0]['panteon'];
		$data['domicilio'] 				= $localizacion[0]['domicilio'];
		$data['nombre_apartante'] 		= $localizacion[0]['nombre_apartante'];
		$this->load->view('header');
		$this->load->view('vista_terreno', $data);
	}

	public function eliminar($id)
	{
		$this->db->delete('terrenos', array('id' => $id));
		redirect(base_url("terreno"));
	}

	public function editar($id)
	{
		$localizacion 	= $this->db->get_where('terrenos', 	array('id' => $id))->result_array();
		$data['tomado'] = false;
		$data['id'] 					= $id;
		$data['lt'] 					= $localizacion[0]['lt'];
		$data['mz'] 					= $localizacion[0]['mz'];
		$data['sec'] 					= $localizacion[0]['sec'];
		$data['fila'] 					= $localizacion[0]['fila'];
		$data['panteon'] 				= $localizacion[0]['panteon'];
		$data['domicilio'] 				= $localizacion[0]['domicilio'];
		$data['nombre_apartante'] 		= $localizacion[0]['nombre_apartante'];
		$this->load->view('header');
		$this->load->view('editar_terreno', $data);
	}

	public function update($id)
	{
		$data['tomado'] = false;
		$this->form_validation->set_rules('lt', 'Lote', 'trim|required|numeric');
		$this->form_validation->set_rules('mz', 'Manzana', 'trim|required|numeric');
		$this->form_validation->set_rules('sec', 'Seccion', 'trim|required|numeric');
		$this->form_validation->set_rules('fila', 'Fila', 'trim|required|numeric');
		$this->form_validation->set_rules('domicilio', 'Domicilio', 'trim|required|max_length[120]');
		$this->form_validation->set_rules('nombre_apartante', 'Nombre apartante', 'trim|required|max_length[120]');

		$this->form_validation->set_message('required', 'Este campo es requerido');
		$this->form_validation->set_message('numeric', 'Este campo solo acepta números');
		$this->form_validation->set_message('max_length','No puede exceder de <span class="hide">%d</span>%d caracteres');
		$this->form_validation->set_message('min_length', 'Este campo debe tener mínimo <span class="hide">%d</span>%d caracteres');
		$this->form_validation->set_message('exact_length', 'Este campo debe tener <span class="hide">%d</span>%d caracteres');

		$this->form_validation->set_error_delimiters('','');
		if($this->form_validation->run() == FALSE) {

			$localizacion 	= $this->db->get_where('terrenos', 	array('id' => $id))->result_array();
			$data['id'] 					= $id;
			$data['lt'] 					= $localizacion[0]['lt'];
			$data['mz'] 					= $localizacion[0]['mz'];
			$data['sec'] 					= $localizacion[0]['sec'];
			$data['fila'] 					= $localizacion[0]['fila'];
			$data['panteon'] 				= $localizacion[0]['panteon'];
			$data['domicilio'] 				= $localizacion[0]['domicilio'];
			$data['nombre_apartante'] 		= $localizacion[0]['nombre_apartante'];
			$this->load->view('header');
			$this->load->view('editar_terreno', $data);

		}else {
			$data = array(
				"id"				=> $id,
				"lt"				=> $this->input->post("lt"),
				"mz" 				=> $this->input->post("mz"),
				"sec" 				=> $this->input->post("sec"),
				"fila" 				=> $this->input->post("fila"),
				"nombre_apartante" 	=> $this->input->post("nombre_apartante"),
				"domicilio" 		=> $this->input->post("domicilio")
			);
			

			$data2 = array(
				"lt"				=> $this->input->post("lt"),
				"mz" 				=> $this->input->post("mz"),
				"sec" 				=> $this->input->post("sec"),
				"fila" 				=> $this->input->post("fila"),
				"panteon" 			=> $this->input->post("panteon")
			);

			if($this->db->get_where('terrenos', $data2)->num_rows() == 0 &&  $this->db->get_where('localizacion', $data2)->num_rows() == 0)
			{
				$this->db->where('id', $id);
				if($this->db->update('terrenos', $data))
				{
					redirect(base_url("terreno/ver/".$id));
				}				
			}
			else 
			{
				$data['tomado'] = true;
				$this->load->view('header');		
				$this->load->view('editar_terreno', $data);	
				$this->load->view('footer');
			}
		}
	}

	public function exito()
	{
		$this->load->view('header');
		$this->load->view('terrenos');
		$this->load->view('footer');		
		$this->load->view('exito_apartado');
	}
}

