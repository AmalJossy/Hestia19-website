<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');
use Restserver\Libraries\REST_Controller;
class Mapp_api extends REST_Controller {
	 function __construct() {
        parent::__construct();
		$this->load->model('appapi_Model');
    }



		function login_post(){
			//$login_details = $this->appapi_Model->login_check($this->post('email'));
			//echo $login_details;
            //echo "false";
			//$this->response($login_details);
            $r = $this->appapi_Model->login_check($this->post('email'));
            $this->response($r);

		}
		function currenteventstatus_post(){

            $r = $this->appapi_Model->GetEventCurrentStatus($this->post('event_id'));
            $this->response($r);

		}
		function event_schedule_get($eid) {
			$this->load->model('Report_model');
			$s = $this->Report_model->get_event_schedule($eid);
			$this->response($s);
		}
	
}
