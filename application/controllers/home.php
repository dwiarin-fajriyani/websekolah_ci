<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('page/header');
		$this->load->view('home');
		$this->load->view('page/footer');
	}
}
