<?php
class Profile extends CI_Controller {
    function __construct() {
        parent::__construct();
		$this->load->model('user_model');
    }


    public function update(){
//        if($this->user_model->is_registered($this->session->email,"Y") == TRUE OR $this->session->email == NULL) {
//            redirect(base_url());
//        }
        $data['title'] = ucfirst('Update Profile');
        $data['userinfo']=$this->user_model->get_user_single($this->session->email);
        //$data['userinfo']=$this->user_model->get_user_single($this->session->email);
        $this->load->view('dashboard/updateprofile',$data);

    }

    public function complete(){
        if($this->user_model->is_registered($this->session->email,"Y") == TRUE OR $this->session->email == NULL) {
            redirect(base_url());
        }
        $data['title'] = ucfirst('Complete Profile');
        $this->load->view('dashboard/complete',$data);
        if( $this->input->post('college') != NULL && $this->input->post('phone') != NULL ){
            $user['college'] = $this->input->post('college');
            $user['phone'] = $this->input->post('phone');
            $this->user_model->complete_signin($user);
            if(isset($_SESSION['back_url']) && strpos($_SESSION['back_url'], 'ico') == false){
                $link=$_SESSION['back_url'];
                unset($_SESSION['back_url']);
                redirect($link);
            }else{
                redirect(base_url());
            }
            
        }
    }
    public function updateprofile(){


        if( $this->input->post('college') != NULL && $this->input->post('phone') != NULL ){
            $user['college'] = $this->input->post('college');
            $user['phone'] = $this->input->post('phone');
            $user['fullname'] = $this->input->post('fullname');
            if($this->input->post('acc')){
                $acc=substr(implode('', $this->input->post('acc')), 0);
                $user['accommodation'] = $acc;
            }


             $this->user_model->update_profile($this->session->email,$user);

            redirect(base_url());


        }
    }
}