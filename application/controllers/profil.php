<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profil extends CI_Controller {

	public function index()
	{
		$this->load->view('page/header');
		$this->load->view('profil');
		$this->load->view('page/footer');
	}
}
