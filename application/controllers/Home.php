<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{

		$this->load->view('site');
	}

	
	public function home()
	{

		$this->load->view('home');
	}

	public function about()
	{

		$this->load->view('aboutUs');
	}


	
	public function contactUs()
	{

		$this->load->view('contactUs');
	}

}
