<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');
use Restserver\Libraries\REST_Controller;
class app_api extends REST_Controller {
	 function __construct() {
        parent::__construct();
		$this->load->model('appapi_Model');
    }
		function login_get(){
			$login_details = $this->appapi_Model->login_check($this->post('email'));
			echo $login_details;
            //echo "false";
			//$this->response($login_details);
		}

    function login_post(){
        $this->load->model('category_model');
        $this->load->model('event_model');
        $username=$this->post('username');
        $data = $this->category_model->validate($username,$password);
        if( $data == FALSE ){
            $data = $this->event_model->validate($username,$password);
        }
        $this->response($data);
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
