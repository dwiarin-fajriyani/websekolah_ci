<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	public function rpl()
	{
		$this->load->view('page/header');
		$this->load->view('rpl');
		$this->load->view('page/footer');
	}
	public function akl()
	{
		$this->load->view('page/header');
		$this->load->view('akl');
		$this->load->view('page/footer');
	}
	public function otkp()
	{
		$this->load->view('page/header');
		$this->load->view('otkp');
		$this->load->view('page/footer');
	}
	public function bdp()
	{
		$this->load->view('page/header');
		$this->load->view('bdp');
		$this->load->view('page/footer');
	}

}
