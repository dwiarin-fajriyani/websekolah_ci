<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kontak extends CI_Controller {

	public function index()
	{
		$this->load->view('page/header');
		$this->load->view('kontak');
		$this->load->view('page/footer');
	}
}
