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
        $this->load->view('templates/header',$data);
        $this->load->view('dashboard/complete',$data);
        $this->load->view('templates/footer');
        if( $this->input->post('college') != NULL && $this->input->post('phone') != NULL ){
            $user['college'] = $this->input->post('college');
            $user['phone'] = $this->input->post('phone');
            $this->user_model->complete_signin($user);
            redirect(base_url());
        }
    }
}