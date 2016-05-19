<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class M_Ajustes extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	public function index()
	{

	}

	public function encriptador($frase)
	{
		$public_key = openssl_get_publickey(file_get_contents(base_url('assets/conf/public.pem')));
		$data = $frase;
		$encrypted = $e = NULL;
		openssl_seal($data, $encrypted, $e, array($public_key));
		$sealed_data = base64_encode($encrypted);
		$envelope = base64_encode($e[0]);
		$datos = array(
			'passworde' 	=> $envelope,
			'passwords' 	=> $sealed_data
		);
		$this->db->where('id', 1);
		$this->db->update('usuarios', $datos);
	}

	function desencriptador()
	{
		$vieja = $this->db->get_where('usuarios', array('id' => 1))->result_array(); 
		$private_key = openssl_get_privatekey(file_get_contents(base_url('assets/conf/private.key')));
		$input = base64_decode($vieja[0]['passwords']);
		$einput = base64_decode($vieja[0]['passworde']);
		$plaintext = NULL;
		openssl_open($input, $plaintext, $einput, $private_key);
		return $plaintext;
	}

	function getEmail()
	{
		$vieja = $this->db->get_where('usuarios', array('id' => 1))->result_array(); 
		return $vieja[0]['correo'];
	}
}
?>