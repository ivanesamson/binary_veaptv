<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function index() {
		$this->data['title'] = "Home";
		$this->data['page'] = "users/index";
		$this->load->view('index', $this->data);
	}
	public function login() {
		$this->data['title'] = "Login";
		$this->data['page'] = "users/index";
		$this->load->view('index', $this->data);
	}
	public function register() {
		$this->data['title'] = "Register";
		$this->data['page'] = "users/register";
		$this->load->view('index', $this->data);
	}
	public function forgot_password() {
		$this->data['title'] = "Forgot Password";
		$this->data['page'] = "users/forgot_password";
		$this->load->view('index', $this->data);
	}
	public function about() {
		$this->data['title'] = "About";
		$this->data['page'] = "pages/about/index";
		$this->load->view('index', $this->data);
	}
	public function features() {
		$this->data['title'] = "Features";
		$this->data['page'] = "pages/features/index";
		$this->load->view('index', $this->data);
	}
	public function contact() {
		$this->data['title'] = "Contact";
		$this->data['page'] = "pages/contact/index";
		$this->load->view('index', $this->data);
	}
	public function privacy() {
		$this->data['title'] = "Privacy";
		$this->data['page'] = "pages/privacy/index";
		$this->load->view('index', $this->data);
	}
}
