<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Features extends CI_Controller {

	public function index()
	{
		$this->data['title'] = "Features";
		$this->data['page'] = "features/index";

        $this->load->view('index', $this->data);
	}
}
