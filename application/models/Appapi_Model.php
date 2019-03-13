<?php
class Appapi_Model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function login_check(){
        $gmailid=$this->security->xss_clean($this->input->post('email'));
        $this->db->where('email',$gmailid);
        $query=$this->db->get('users');
        $num_rows=$query->num_rows();
        if($num_rows == 1)
        {
            $this->db->select('email, fullname, phone, college, accommodation');
            if( $gmailid != NULL ){
                $this->db->where('email', $gmailid );
            }
            $query = $this->db->get('users');
            return $query->result_array();
        }else{
            return "false";
        }
    }

    public function insert_user_details(){
        $data['email']=$this->security->xss_clean($this->input->post('email'));
        $data['fullname']=$this->security->xss_clean($this->input->post('fullname'));
        $data['college']=$this->security->xss_clean($this->input->post('college'));
        $data['phone']=$this->security->xss_clean($this->input->post('phone'));
        if($data['email']){
            return $this->db->insert('users', $data);
        }else{
            return "0";
        }
        
    }
    public function get_reg_events(){
        $email=$this->security->xss_clean($this->input->post('email'));
        $imgpath=base_url("assets/uploads/img/");
        $query=$this->db->query("select event_id,concat('".$imgpath."',event_id,'.jpg') as img,title from events where event_id in (select event_id from registration where member_email='".$email."' )");
        return  json_encode($query->result());

    }


}
?>