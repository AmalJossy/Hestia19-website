<?php
require(APPPATH.'libraries/REST_Controller.php');
use Restserver\Libraries\REST_Controller;

class Admin extends REST_Controller {

    function login_post(){
        $username=$this->post('username');
        $password=$this->post('password');
    }
    function status_get(){
        $data['status']='online';
        $data['version']='3.10';
        $this->response($data);
    }
    function category_post(){
        $this->load->model('category_model');
        $data['cat_name']=$this->post('cat_name');
        $data['username']=$this->post('username');
        $data['pswd']=$this->post('password');
        $this->category_model->create($data);
        $this->response($data);
    }
}