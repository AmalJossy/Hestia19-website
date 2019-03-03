<?php
require(APPPATH.'libraries/REST_Controller.php');
use Restserver\Libraries\REST_Controller;

class Admin extends REST_Controller {
    function login_post(){
        $username=$this->get('username');
        $password=$this->get('password');
    }
    function user_get()
    {
        $data = array('returned: '. $this->get('id'),"CI 3.10");
        $this->response($data);
    }
     
    function user_post()
    {       
        $data = array('returned: '. $this->post('id'));
        $this->response($data);
    }
 
    function user_put()
    {       
        $data = array('returned: '. $this->put('id'));
        $this->response($data);
    }
 
    function user_delete()
    {
        $data = array('returned: '. $this->delete('id'));
        $this->response($data);
}
}