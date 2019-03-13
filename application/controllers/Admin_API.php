<?php
require(APPPATH.'libraries/REST_Controller.php');
use Restserver\Libraries\REST_Controller;

class Admin_API extends REST_Controller {

    function login_post(){
        $this->load->model('category_model');
        $this->load->model('event_model');
        $username=$this->post('username');
        $password=$this->post('password');
        $data = $this->category_model->validate($username,$password);
        if( $data == FALSE ){
            $data = $this->event_model->validate($username,$password);
        }
        $this->response($data);
    }
    function login_delete(){
        $this->session->sess_destroy();
        $this->response(true);
    }
    function status_get(){
        $data['status']='online';
        $data['version']='3.10';
        $app_ver_file = fopen(__DIR__ . '/app_version.txt', "r");
        $data['app_version']=rtrim(fgets($app_ver_file));
        fclose($app_ver_file);
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


    function event_get($id = NULL){
        $this->load->model('event_model');
        $events = $this->event_model->get_events($id);
        $this->response($events);
    }
    function event_post(){
        $this->load->model('event_model');
        $data['title']=$this->post('title');
        $data['cat_id']=$this->post('cat_id');
        $data['short_desc']=$this->post('short_desc');
        $data['details']=$this->post('details');
        $data['venue']=$this->post('venue');
        $data['prize']=$this->post('prize');
        $data['co1_name']=$this->post('co1_name');
        $data['co1_no']=$this->post('co1_no');
        $data['co2_name']=$this->post('co2_name');
        $data['co2_no']=$this->post('co2_no');
        $data['seats']=$this->post('seats');
        $data['reg_start']=$this->post('reg_start');
        $data['reg_end']=$this->post('reg_end');
        $data['username']=$this->put('username');
        $data['pswd']=$this->put('password');
        $status = $this->event_model->create($data);
        $this->response($data,$status);
    }
    function event_put(){
        $this->load->model('event_model');
        $id=$this->put('event_id');
        $data['title']=$this->put('title');
        $data['cat_id']=$this->put('cat_id');
        $data['short_desc']=$this->put('short_desc');
        $data['details']=$this->put('details');
        $data['venue']=$this->put('venue');
        $data['prize']=$this->put('prize');
        $data['co1_name']=$this->put('co1_name');
        $data['co1_no']=$this->put('co1_no');
        $data['co2_name']=$this->put('co2_name');
        $data['co2_no']=$this->put('co2_no');
        $data['seats']=$this->put('seats');
        $data['reg_start']=$this->put('reg_start');
        $data['reg_end']=$this->put('reg_end');
        $data['username']=$this->put('username');
        $data['pswd']=$this->put('password');
        $status =  $this->event_model->modify($id,$data);
        $this->response($data,$status);
    }
    function event_delete( $id = NULL ){
        $this->load->model('event_model');
        $status =  $this->event_model->delete($id);
        $this->response($id,$status);
    }
}
