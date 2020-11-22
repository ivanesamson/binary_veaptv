<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index() {
		$this->load->model('events_model');

		if ($_POST) {
			$this->form_validation->set_rules('event_code', 'Event Code', 'trim|max_length[20]|callback_events_exist');

			if ($this->form_validation->run() == FALSE) {
				$this->data['title'] = "Events";
				$this->data['page'] = "events/index";

				$this->load->view('index', $this->data);

			} else {
				redirect(base_url('events/login'));
				//$this->load->view('formsuccess');
			}
		}else {
			if ($this->session->userdata('event_code')!='') redirect(base_url()."events/login");

			$this->data['title'] = "Events";
			$this->data['page'] = "events/index";

			$this->load->view('index', $this->data);
		}
	}

	function events_exist($key) {
		$this->events_model->event_exist($key);
	}

	function login() {
		if ($_POST) {
			$username = $this->input->post('username');
            $password = $this->input->post('password');

			$user = $this->users_model->check_login($username, $password);

			if (@$user->status_flag==1) {
            	$sessdata = array(
                	'user_id'       => @$user->user_id,
                	'account_id'	=> @$user->account_id,
                 	'username'      => @$user->username,
                  	'firstname'     => @$user->firstname,
                  	'lastname'      => @$user->lastname,
                  	'fullname'		=> @$user->lastname .', '. @$user->firstname,
                  	'password'      => @$user->password,
                  	'admin_flag'	=> @$user->admin_flag, 
                  	'fullaccess_flag' => @$user->fullaccess_flag
              	);

             	$this->session->set_userdata($sessdata);
				 //var_dump($sessdata);
				} else {
				echo "Sorry, username/password is Invalid. Please try again.<br><br>";
			}		
		} else {
			//if ($this->session->userdata('user_id')!='') redirect(base_url()."user/login");

			$this->data['title'] = "Events - Login";
			$this->data['page'] = "events/login";
	
			$this->load->view('index', $this->data);
		}

	}

	function logout() {
		$this->session->sess_destroy();
		redirect(base_url() . "events/login");
	}

}
