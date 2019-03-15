<?php
class Report_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function get_events($id){
        $this->db->select ( '*' );
        $this->db->from ( 'events' );
        $this->db->join ( 'categories', 'categories.cat_id = events.cat_id' , 'inner' );
        if( $id != NULL ){
            $this->db->where ( 'categories.cat_name',$id);
        }
        $query = $this->db->get ();
        return $query->result();
    }
    
    public function get_user_events($email){
        $this->db->select ( '*' );
        $this->db->from ( 'events' );
        $this->db->join ( 'registration', 'events.event_id = registration.event_id' , 'inner' );
        if( $email != NULL ){
            $this->db->where ( 'registration.member_email',$email);
        }
        $query = $this->db->get ();
        return $query->result();
    }
    public function get_single_event($link){
        $this->db->select ( '*' );
        $this->db->from ( 'events' );

        if( $link != NULL ){
            $this->db->where ('link',$link);
        }
        $query = $this->db->get ();
        return $query->row();
    }
    public function get_event_cat_details($id){
        $this->db->select ( 'categories.*' );
        $this->db->from ( 'events' );
        $this->db->join ( 'categories', 'categories.cat_id = events.cat_id' , 'inner' );
        if( $id != NULL ){
            $this->db->where ( 'events.event_id',$id);
        }
        $query = $this->db->get ();
        return $query->row();
    }

    public function get_event_reg_count($eid){
        $cnt=$this->db->query("SELECT count(distinct reg_email) as Cnt from registration where event_id=".$eid);
        return $cnt->row()->Cnt;
    }

    public function get_team_size($eid){
        $cnt=$this->db->query("SELECT min_memb,max_memb from events where event_id=".$eid);
        return $cnt->row();
    }
    
    public function get_user_accomodations($email){
        $cnt=$this->db->query("SELECT accommodation from users where email='".$email."'");
        return $cnt->row()->accommodation;
    }
    public function get_book_status($eid){
        if(!isset($_SESSION['email']))return 0;
        $cnt=$this->db->query("SELECT count(*) As Cnt from registration where member_email='".$_SESSION['email']."' and event_id=".$eid);
        return $cnt->row()->Cnt;
    }



}
?>