<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Users_model');
		$this->load->model('Events_model');
	}
	public function index() {
		$this->data['title'] = "Home";
		$this->data['page'] = "users/index";
		$this->data['footer_class'] = "body-1";
		$this->load->view('index', $this->data);
	}
	public function code() {
		$this->data['title'] = "Login";
		$this->data['page'] = "users/index";
		$this->data['footer_class'] = "body-1";
		$this->load->view('index', $this->data);
	}
	public function login() {
		$this->data['title'] = "Login";
		$this->data['page'] = "users/login";
		$this->data['footer_class'] = "body-1";
		$this->load->view('index', $this->data);
	}
	public function register() {
		$this->data['title'] = "Register";
		$this->data['page'] = "users/register";
		$this->data['footer_class'] = "body-1";
		$this->data['custom_css'] = array(
			'cdn' => [
				'//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css'
			]
		);
		$this->data['custom_js'] = array(
			'cdn' => [
				'//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js'
			]
		);
		$this->load->view('index', $this->data);
	}
	public function forgot_password() {
		$this->data['title'] = "Forgot Password";
		$this->data['page'] = "users/forgot_password";
		$this->data['footer_class'] = "body-1";
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
		$this->data['footer_class'] = "body-2";
		$this->load->view('index', $this->data);
	}
	public function contact() {
		$this->data['title'] = "Contact";
		$this->data['page'] = "pages/contact/index";
		$this->data['footer_class'] = "body-2";
		$this->load->view('index', $this->data);
	}
	public function privacy() {
		$this->data['title'] = "Privacy";
		$this->data['page'] = "pages/privacy/index";
		$this->data['footer_class'] = "body-2";
		$this->load->view('index', $this->data);
	}

	public function login_code() {		
		$this->form_validation->set_rules('eventCode', 'Event Code', 'trim|required');
		if ($this->form_validation->run() == FALSE){
			echo json_encode(array('status'=>'201', 'message' => validation_errors('<div class="error">', '</div>') ));
		} else {
			$code = $this->input->post('eventCode');
			$result = $this->Events_model->event_exist($code);
			if ($result == true) {
				$sessdata['event_code'] = $code;
				$this->session->set_userdata($sessdata);
				echo json_encode(array('status'=>'200', 'message'=> 'Successfully....'));
			} else {
				echo json_encode(array('status'=>'201', 'message'=> 'Event code not found'));
			}
		}
	}
	public function login_user() {		
		$this->form_validation->set_rules('eventCode', 'Event Code', 'trim|required');
		if ($this->form_validation->run() == FALSE){
			echo json_encode(array('status'=>'200', 'message' => validation_errors('<div class="error">', '</div>') ));
		} else {
			echo json_encode(array('status'=>'200', 'message'=> 'Login Success'));
		}
	}
	public function register_user() {	
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('pw', 'Password', 'trim|required');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required|min_length[11]|max_length[11]|numeric');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[account_users_tb.email]');
		
		$name = $this->input->post('name');
		$pw = $this->input->post('pw');	
		$contact = $this->input->post('contact');	
		$email = $this->input->post('email');	
		$account = $this->input->post('account');	

		if ($this->form_validation->run() == FALSE){
			echo json_encode(array('status'=>'201', 'message' => validation_errors('<div>', '</div>') ));
		} else {
			$data = array (
				'account_id' => ($account=='')? 1:$account,
				'name' => $name,
				'password' => md5($pw),
				'email' => $email,
				'contact_no' => $contact,
				'created_at' => date('Y-m-d H:i:s')
			);
			$result = $this->Users_model->insert($data);
			if($result == true) {
				echo json_encode(array('status'=>'200', 'message'=> 'Thank you for registering. You may now ' . '<a class="text-danger" href="users/code">Sign In here</a>'));
			} else {
				echo json_encode(array('status'=>'201', 'message'=> 'Failed, Please try again!'));
			}
		}
	}

}
