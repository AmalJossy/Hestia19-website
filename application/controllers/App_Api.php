<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App_Api extends CI_Controller {
	 function __construct() {
        parent::__construct();
		$this->load->model('appapi_Model');
    }
		function LoginCheck(){
			$login_details = $this->appapi_Model->login_check();
			$this->response($login_details);
		}
		function InsertNewUser(){
            $this->load->model('user_model');
            if($this->user_model->is_registered($_SESSION['email'],"N")==FALSE){
                echo $this->appapi_Model->insert_user_details("N");
            }else{
                echo $this->appapi_Model->insert_user_details("Y");
            }

		}
		
		function GetUserEventsList(){
			echo $this->appapi_Model->get_reg_events();
		}

		function GetEventDetails(){
			echo $this->appapi_Model->get_event_details();
		}
		

		
	
}
