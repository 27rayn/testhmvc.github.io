<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	function index(){
		$this->load->view('login');
	}
}
