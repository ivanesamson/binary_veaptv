<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index()
	{
		$this->data['title'] = "Events";
		$this->data['page'] = "events/index";

        $this->load->view('index', $this->data);
	}
}
