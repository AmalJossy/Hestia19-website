<?php
class User_model extends CI_Model {
    public function get_users($email){
        $this->db->select('fullname, email, client_id, phone, college, verified, banned');
        if( $id != NULL ){
            $this->db->where('email', $email );
        }
        $query = $this->db->get('users');
        return $query->result_array();
    }
    public function create($data){
        $this->db->insert('users', $data);
        return 201;
    }
    public function modify($email,$data){
        if( $this->session->type != 'super' && $this->session->email != $email ){
            return 401;
        }
        foreach($data as $key => $value){
            if( $value != NULL ){ 
                $this->db->set($key, $value);
            }
        }
        $this->db->where('email', $email);
        $this->db->update('users');
        return 200;
    }
    public function delete($email){
        if( $this->session->type != 'super' && $this->session->email != $email ){
            return 401;
        }
        $this->db->delete('users', array('email' => $email));
        return 200;
    }
    public function is_registered($email){

        $query = $this->db->get_where('users',"email='$email' and (phone is not null and college is not null)" );
        if( $query->num_rows() == 1 ){
            return TRUE;
        }
        return FALSE;
    }
    public function complete_signin($data){

        $this->load->library('encryption');

        $data['email'] = $this->session->email;
        $data['fullname'] = $this->session->name;
        $data['hashcode'] =password_hash($data['email'],PASSWORD_BCRYPT);
        $this->create($data);
    }
}
?>