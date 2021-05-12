<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->view('page/header');
		$this->load->view('blog');
		$this->load->view('page/footer');
	}
	public function berita1()
	{
		$this->load->view('page/header');
		$this->load->view('berita/pemilihan-ketua-osis-mpk');
		$this->load->view('page/footer');
	}
	public function berita2()
	{
		$this->load->view('page/header');
		$this->load->view('berita/smkn-2-sumedang-raih-penghargaan-pada-dinamik');
		$this->load->view('page/footer');
	}
	public function berita3()
	{
		$this->load->view('page/header');
		$this->load->view('berita/vocal-solo-pop-sunda');
		$this->load->view('page/footer');
	}

}
