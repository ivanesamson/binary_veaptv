<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing extends CI_Controller {

	public function index()
	{
		$this->data['title'] = "Pricing";
		$this->data['page'] = "pricing/index";

        $this->load->view('index', $this->data);
	}
}
