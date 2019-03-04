<?php
require(APPPATH.'libraries/REST_Controller.php');
use Restserver\Libraries\REST_Controller;

class Admin_API extends REST_Controller {

    function login_post(){
        $this->load->model('category_model');
        $username=$this->post('username');
        $password=$this->post('password');
        $data = $this->category_model->validate($username,$password);
        $this->response($data);
    }
    function login_delete(){
        $this->session->sess_destroy();
        $this->response(true);
    }
    function status_get(){
        $data['status']='online';
        $data['version']='3.10';
        if(isset($_SESSION['username'])){
            $data['username']=$_SESSION['username'];
        }
        $this->response($data);
    }
    function category_get($id = NULL){
        $this->load->model('category_model');
        $categories = $this->category_model->get_categories($id);
        $this->response($categories);
    }
    function category_post(){
        $this->load->model('category_model');
        $data['cat_name']=$this->post('cat_name');
        $data['username']=$this->post('username');
        $data['pswd']=$this->post('password');
        $status = $this->category_model->create($data);
        $this->response($data,$status);
    }
    function category_put(){
        $this->load->model('category_model');
        $id=$this->put('cat_id');
        $data['cat_name']=$this->put('cat_name');
        $data['username']=$this->put('username');
        $data['pswd']=$this->put('password');
        $status =  $this->category_model->modify($id,$data);
        $this->response($data,$status);
    }
    function category_delete( $id = NULL ){
        $this->load->model('category_model');
        $status =  $this->category_model->delete($id);
        $this->response($id,$status);
    }
}