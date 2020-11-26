<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->data['title'] = "About";
		$this->data['page'] = "about/index";

        $this->load->view('index', $this->data);
	}
}
