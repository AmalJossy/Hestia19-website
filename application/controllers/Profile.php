<?php
class Profile extends CI_Controller {
    function __construct() {
        parent::__construct();
		$this->load->model('user_model');
    }
    public function complete(){
        if($this->user_model->is_registered($this->session->email) == TRUE OR $this->session->email == NULL) {
            redirect(base_url());
        }
        $data['title'] = ucfirst('Complete Profile');
        $this->load->view('dashboard/complete',$data);
        if( $this->input->post('college') != NULL && $this->input->post('phone') != NULL ){
            $user['college'] = $this->input->post('college');
            $user['phone'] = $this->input->post('phone');
            $this->user_model->complete_signin($user);
            if(isset($_SESSION['back_url'])){
                $link=$_SESSION['back_url'];
                unset($_SESSION['back_url']);
                redirect($link);
            }else{
                redirect(base_url());
            }
            
        }
    }
}