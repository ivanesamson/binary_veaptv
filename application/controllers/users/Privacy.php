<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy extends CI_Controller {

	public function index()
	{
		$this->data['title'] = "Privacy";
		$this->data['page'] = "privacy/index";

        $this->load->view('index', $this->data);
	}
}
