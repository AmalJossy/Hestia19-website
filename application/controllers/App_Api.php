<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App_Api extends CI_Controller {
	 function __construct() {
        parent::__construct();
		$this->load->model('appapi_Model');
    }
		function LoginCheck(){
			echo $this->appapi_Model->login_check();
		}
		function InsertNewUser(){
			echo $this->appapi_Model->insert_user_details();
		}
		
		function GetUserEventsList(){
			echo $this->appapi_Model->get_reg_events();
		}

		
	
}
