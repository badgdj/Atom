<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carro extends CI_Controller {

	function __construct()
	{
		parent:: construct();	
	}

	public function index()
	{
		$this->data['titulo'] = 'Carrinho de Compras';

		$this->load->view('Carro', $this->data);
	}
}
