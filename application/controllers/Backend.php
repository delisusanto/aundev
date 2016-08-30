<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {


	public function index()
	{
		$this->load->view('backend/layout');
	}


	public function dashboard($halaman = 'home')
	{
		$this->load->view('backend/head');
		$this->load->view('backend/wrapperhead');
		$this->load->view('backend/header');
		$this->load->view('backend/sidebarmenu');
		$this->load->view('backend/contenthead');
		
		$this->load->view('backend/'.$halaman);

		$this->load->view('backend/footer');
		$this->load->view('backend/foot');
	}





}