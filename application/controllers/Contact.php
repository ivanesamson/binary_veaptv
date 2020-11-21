<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->data['title'] = "Contact";
		$this->data['page'] = "contact/index";

        $this->load->view('index', $this->data);
	}
}
