<?php
class Event_model extends CI_Model {    
    public function create($data){
        $data['pswd']=password_hash($data['pswd'],PASSWORD_BCRYPT);
        $this->db->insert('events', $data);
    }
    public function modify($id,$data){
        foreach($data as $key => $value){
            if( $value != NULL ){ 
                if( $key == 'pswd' ){
                    $this->db->set($key,password_hash($value,PASSWORD_BCRYPT));
                }
                else{
                    $this->db->set($key, $value);
                }
            }
        }
        $this->db->where('event_id', $id);
        $this->db->update('events');
    }
    public function delete($id){
        $this->db->delete('events', array('event_id' => $id));
    }
}
?>