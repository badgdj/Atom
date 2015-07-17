<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	/*
	function __construct()
	{
		parent:: construct();	
	}
	*/
	
	public function index()
	{
		$this->data['titulo'] = 'Login de acesso ao sistema';

		if ( isset($_POST) ) {
			
			$error = $this->verificaLogin($_POST);
		}

		$this->load->view('login', $this->data);
	}
	public function home()
	{
		//$this->load->view('login');
	}
	public function verificaLogin($data)
	{
		echo "<pre>";
		var_dump($data);
		$this->load->view('Usuario', $this->data);
	}
}

