<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
    }

	public function index()
	{
		$this->load->helper('url');

		$data['title'] = "Home Page";

		$this->load->view('include/header');
		$this->load->view('include/navbar_view');
		$this->load->view('pages/home_view');
		$this->load->view('include/footer');
	}
}
