<?php
class Event_model extends CI_Model {
    public function get_category_events($id){
        $this->db->select('event_id, cat_id, title, short_desc, details, min_memb, max_memb,
                    venue, reg_fee, fee_type, prize, file1, file2, co1_name,
                    co1_no, co2_name, co2_no, seats, reg_start, reg_end, link');

        $this->db->where('cat_id', $id );

        $query = $this->db->get('events');
        return $query->result_array();
    }
    public function get_event($id){
        $this->db->select('event_id, cat_id, title, short_desc, details, min_memb, max_memb,
                    venue, reg_fee, fee_type, prize, file1, file2, co1_name,
                    co1_no, co2_name, co2_no, seats, reg_start, reg_end, link');
        if( $id != NULL ){
            $this->db->where('event_id', $id );
        }
        $query = $this->db->get('events');
        return $query->result_array();
    }
    
    public function get_registrations_event($eid){
        if(!$eid){
            $eid=0;
        }
        $query=$this->db->query("SELECT event_id,reg_email,member_email,fullname,phone,college,file1,file2 FROM registration a left join users b on  a.member_email=b.email  where   a.event_id=".$eid." and if(a.member_email=a.reg_email,1,0)=1 order by reg_id");
        $data = array();
        foreach($query->result() as $row1)
        {
    
                $row = array();
                $row['reg_email'] = $row1->reg_email;
                $row['fullname'] = $row1->fullname;
                $row['college'] = $row1->college;
                $row['phone'] = $row1->phone;
                $row['file1'] = $row1->file1;
                $row['file2'] = $row1->file2;
                $query_memb=$this->db->query("SELECT member_email,fullname,phone,college FROM registration a left join users b on  a.member_email=b.email  where   a.event_id=".$row1->event_id." and if(a.member_email=a.reg_email,1,0)=0 and a.reg_email='".$row1->reg_email."'  order by reg_id");
                $row['members']=$query_memb->result_array();
                $data[] = $row;

        }

        return  $data;

    }
    
    public function get_event_by_link($link){
        $this->db->select('event_id, cat_id, title, short_desc, details, min_memb, max_memb,
                    venue, reg_fee, fee_type, prize, file1, file2, co1_name,
                    co1_no, co2_name, co2_no, seats, reg_start, reg_end, link');
        if( $id != NULL ){
            $this->db->where('link', $link );
        }
        $query = $this->db->get('events');
        return $query->result_array();
    }
    public function create($data){
        if( $this->session->type != 'super' OR $this->session->cat_id != $data['cat_id'] ){
            return 401;
        }
        $data['pswd']=password_hash($data['pswd'],PASSWORD_BCRYPT);
        $this->db->insert('events', $data);
        return 201;
    }
    public function modify($id,$data){
        $cat_id= $this->db->query("SELECT cat_id FROM events WHERE event_id=='".$id."';")->result_array()['cat_id'];
        if( $this->session->type != 'super' && $this->session->event_id != $id && $this->session->cat_id != $cat_id ){
            return 401;
        }
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
        return 200;
    }
    public function delete($id){
        $cat_id= $this->db->query("SELECT cat_id FROM events WHERE event_id=='".$id."';")->result_array()['cat_id'];
        if( $this->session->type != 'super' && $this->session->event_id != $id && $this->session->cat_id != $cat_id ){
            return 401;
        }
        $this->db->delete('events', array('event_id' => $id));
        return 200;
    }
    public function validate($username,$pswd){
        $query = $this->db->get_where('events', array('username' => $username));
        if($query->num_rows() == 1){
            $row = $query->row();
            $hash = $row->pswd;
            if(password_verify($pswd,$hash)){
                $data = array(
                    'type' => 'event',
                    'event_id' => $row->event_id,
                    'title' => $row->title,
                    'username' => $row->username,
                    'validated' => TRUE
                );
                $this->session->set_userdata($data);
                return $data;
            }
        }
        return FALSE;
    }
}
?>
