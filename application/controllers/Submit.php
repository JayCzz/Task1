<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submit extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
    }


	public function index()
	{
		$this->load->helper('url');

        $data['title'] = "Next Page";

        $data['echo_this'] = "I Love Chicken Nuggets";

		$this->load->view('include/header',$data);
		$this->load->view('pages/Next_page',$data);
		$this->load->view('include/footer');
	}
}
