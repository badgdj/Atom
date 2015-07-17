<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compra extends CI_Controller {

	function __construct()
	{
		parent:: construct();	
	}

	public function index()
	{
		$this->data['titulo'] = 'Compras';

		$this->load->view('Compra', $this->data);
	}
