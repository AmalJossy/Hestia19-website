<?php
class Appapi_Model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function login_check($email){
        $gmailid=$this->security->xss_clean($email);
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
            return $query->result_array()[0];
        }else{
            return "false";
        }
    }
    public function GetEventCurrentStatus($eid, $email = NULL){
        $event=$this->get_single_event($eid);
        $eid=$event->event_id;
        $today = date('Y-m-d');
        $startdate=date('Y-m-d', strtotime($event->reg_start));
        $enddate = date('Y-m-d', strtotime($event->reg_end));
        $this->load->model('report_model');
        $cnt=$this->report_model->get_event_reg_count($eid);

        if ($email != NULL) {

            $this->db->select ( '*' );
            $this->db->from ( 'registration' );
    
            if( $eid != NULL ){
                $this->db->where ('member_email',$email);
                $this->db->where ('event_id',$eid);

                $queryx = $this->db->get ();
                if($queryx->num_rows()>0){
                    return 'booked';
                }
            }

        }

        if (($today >= $startdate) && ($today <= $enddate)){

            if($cnt<$event->seats || $event->seats == 0){
                // available
                return true;
            }else{
                //Sold Out
                return 'sold';
            }
        }else{
            if(($startdate  > $today)){
                $dtstart = date_create($startdate);
                //Not Started
                return $dtstart;

            }
            if(($today > $enddate)){
                //closed
                return 'closed';
            }
        }
    }


    public function get_single_event($eid){
        $this->db->select ( '*' );
        $this->db->from ( 'events' );

        if( $eid != NULL ){
            $this->db->where ('event_id',$eid);
            $query = $this->db->get ();
            return $query->row();
        }


    }

    public function insert_user_details($isupdate="N"){
       $email=$this->security->xss_clean($this->input->post('email'));
        $data['fullname']=$this->security->xss_clean($this->input->post('fullname'));
        $data['college']=$this->security->xss_clean($this->input->post('college'));
        $data['phone']=$this->security->xss_clean($this->input->post('phone'));
        if($email){
            if($isupdate=="N"){
                $data['email']=$email;
                $data['hashcode']=password_hash($email, PASSWORD_BCRYPT);
                return $this->db->insert('users', $data);
            }else{
                $this->db->where('email', $email );
                return $this->db->update('users', $data);
            }

        }else{
            return "0";
        }
        
    }

    public function get_reg_events(){
        $email=$this->security->xss_clean($this->input->post('email'));
        $imgpath=base_url("assets/uploads/event_images/");
        $query=$this->db->query("select e.event_id, e.title, e.file1 as f1_hint, e.file2 as f2_hint, r.file1, r.file2 from events e, registration r where e.event_id=r.event_id and r.member_email='".$email."'");
        return  json_encode($query->result());

    }
    public function get_event_count($catname){

        $query=$this->db->query("select * from events where cat_id in (select cat_id from categories where cat_name like '".$catname. "%')");
        return  $query->num_rows();

    }

    public function get_event_details(){
        $id=$this->security->xss_clean($this->input->post('id'));
        $this->db->select('event_id, cat_id, title, short_desc, details, min_memb, max_memb, venue, reg_fee, fee_type, prize, file1, file2, co1_name, co1_no, co2_name, co2_no, seats, reg_start, reg_end, link');
        $this->db->where('event_id', $id );
        $query = $this->db->get('events');
        return json_encode($query->result_array());
    }

}
?>
