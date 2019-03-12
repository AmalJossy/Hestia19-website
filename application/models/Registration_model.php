<?php
class Registration_model extends CI_Model {
    public function get_event_registrations($id){
        $this->db->select('reg_id, event_id, reg_email, member_email');

        $this->db->where('event_id', $id );

        $query = $this->db->get('registrations');
        return $query->result_array();
    }
    public function get_registrations($id){
        $this->db->select('reg_id, event_id, reg_email, member_email');
        if( $id != NULL ){
            $this->db->where('reg_id', $id );
        }
        $query = $this->db->get('registrations');
        return $query->result_array();
    }
    public function create($data){
        if( $this->session->type != 'super' OR $this->session->email != $data['reg_email'] ){
            return 401;
        }
        $this->db->insert('registrations', $data);
        return 201;
    }
    public function modify($id,$data){
        $reg_email= $this->db->query("SELECT reg_email FROM registations WHERE reg_id=='".$id."';")->result_array()['reg_email'];
        if( $this->session->type != 'super' && $this->session->email != $reg_email ){
            return 401;
        }
        foreach($data as $key => $value){
            if( $value != NULL ){
                $this->db->set($key, $value);
            }
        }
        $this->db->where('reg_id', $id);
        $this->db->update('registrations');
        return 200;
    }
    public function delete($id){
        $reg_email= $this->db->query("SELECT reg_email FROM registations WHERE reg_id=='".$id."';")->result_array()['reg_email'];
        if( $this->session->type != 'super' && $this->session->email != $reg_email ){
            return 401;
        }
        $this->db->delete('registrations', array('reg_id' => $id));
        return 200;
    }
}
?>