<?php
class Category_model extends CI_Model {
    // public $event_id;
    // public $cat_id;
    // public $title;
    // public $short_desc;
    // public $details;
    // public $venue;
    // public $prize;
    // public $co1_name;
    // public $co1_no;
    // public $co2_name;	
    // public $co2_no;	
    // public $seats;	
    // public $reg_start;	
    // public $reg_end;	
    // public $username;	
    // private $pswd;
    
    public function create($data){
        // $this->event_id=$data['event_id'];
        // $this->cat_id=$data['cat_id'];
        // $this->title=$data['title'];
        // $this->short_desc=$data['short_desc'];
        // $this->details=$data['details'];
        // $this->venue=$data['venue'];
        // $this->prize=$data['prize'];
        // $this->co1_name=$data['co1_name'];
        // $this->co1_no=$data['co1_no'];
        // $this->co2_name=$data['co2_name'];
        // $this->co2_no=$data['co2_no'];
        // $this->seats=$data['seats'];
        // $this->reg_start=$data['reg_start'];
        // $this->reg_end=$data['reg_end'];
        // $this->username=$data['username'];
        // $this->pswd=password_hash($data['password'],PASSWORD_BCRYPT);
        // $this->db->insert('events', $this);
        $data['pswd']=password_hash($data['pswd'],PASSWORD_BCRYPT);
        $this->db->insert('events', $data);
    }
    public function modify($id,$data){
        foreach($data as $attribute => $value){
            if( $value != NULL ){
                $this->db->set($attribute, $value);
            }
            if( $key == 'pswd' ){
                $this->db->set($key,password_hash($value,PASSWORD_BCRYPT));
            }
        }
        $this->db->where('event_id', $id);
        $this->db->update('events');
    }
    public function delete($id){
        $this->db->delete('events', array('id' => $id));
    }
}
?>