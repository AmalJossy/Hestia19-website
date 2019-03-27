<?php
class Report_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function login(){
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));

        $this->db->where('username',$username);

        $query=$this->db->get('login_users');
        //$num_rows=$this->db->count_all_results('userlogin');
        $num_rows=$query->num_rows();

        if($num_rows == 1)
        {
            $row = $query->row();
            if (password_verify($password, $row->password)) {
                $data = array(
                    'lid' => $row->lid,
                    'username' => $row->username,
                    'loginname' => $row->name,
                    'validated' => true
                );
                $this->session->set_userdata($data);
                return true;
            } else {
                return false;
            }

            return true;

        }
        return false;
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
    public function get_categories(){
        $this->db->select ( '*' );
        $this->db->from ( 'categories');
        $query = $this->db->get ();
        return $query->result();
    }

    public function get_regmail_by_membmail($email,$eid)
    {
        $this->db->select ( 'reg_email' );
        $this->db->from ( 'registration' );
        $array = array('member_email' =>$email , 'event_id' => $eid); 

      $this->db->where ( $array );
      $query = $this->db->get ();

     return $query->result()[0]->reg_email;
    }

    public function check_files_submit($eid)
    {
        $this->db->select ( 'file1,file2' );
        $this->db->from ( 'registration' );
        $array = array('member_email' =>$_SESSION['email'] , 'event_id' => $eid);
        $this->db->where ( $array );
        $query = $this->db->get ();
        $f1=$query->result()[0]->file1;
        $f2=$query->result()[0]->file2;
        if($this->check_files_lastdate($eid) && $f1===NULL && $f2===NULL)
            return true;
        else
            return false;
    }

    public  function check_files_lastdate($eid)
    {
        $this->db->select ( 'file_last_date' );
        $this->db->from ( 'events' );
        $array = array( 'event_id' => $eid); 
        $this->db->where ( $array );
        $query = $this->db->get ();
        if($query->result()[0]->file_last_date===NULL){

            return true;
        }
        $fld=$query->result()[0]->file_last_date;
        $now = time();
        $target = strtotime($fld. "+1 days");
        $diff = $now - $target;
        if ( $diff > 0 ) {
            return false;
        }
        else{
            return true;
        }
    }

    public function set_file_urls($f1,$evid,$f2 = NULL)
    {
        $this->db->set('file1', $f1);
        $reg_mail=$this->get_regmail_by_membmail($_SESSION['email'],$evid);
    
        $array = array('reg_email' =>$reg_mail , 'event_id' => $evid); 
        $this->db->where($array);
        $this->db->update('registration');
        if($f2!== NULL)
        {
            $this->db->set('file2', $f2);
            $this->db->where($array);
            $this->db->update('registration');
        }
    }

    public function get_eid_by_link($link)
    {
        $data['event']=$this->report_model->get_single_event($link);
        return $data['event']->event_id;
    }
    
    public function get_user_events($email=''){
        $this->db->select ( 'e.*,r.file1 as u_file1, r.file2 as u_file2' );
        $this->db->from ( 'events as e' );
        $this->db->join ( 'registration  as r', 'r.event_id = e.event_id' , 'inner' );
      $this->db->where ( 'r.member_email',$email);
        
        $query = $this->db->get ();
        $data = array();
        foreach($query->result() as $row1)
        {
                $row = array();
                $row['file1'] = $row1->file1;
                $row['u_file1']=$row1->u_file1;
                $row['title'] = $row1->title;
                $row['venue'] = $row1->venue;
                $row['link'] = $row1->link;
                $row['file2'] = $row1->file2;
                $row['u_file2'] = $row1->u_file2;
                $row['file_last_date'] = $row1->file_last_date;
                $query_time=$this->db->query("SELECT * FROM time where event_id=".$row1->event_id."  order by start_time");
                $row['time']=$query_time->result_array();
                $data[] = $row;
        }

        return  $data;
    }
    public function get_reguser_events($email){
        $query=$this->db->query("select e.event_id, e.title from events e, registration r where e.event_id=r.event_id and r.member_email='".$email."'");
        return  json_encode($query->result());
    }

    public function get_reguser_events_status($email,$eid){
        $query=$this->db->query("select e.event_id, e.title from events e, registration r where e.event_id=r.event_id and r.member_email='".$email."' and e.event_id=".$eid);
        return  $query->num_rows();
    }

    public function get_event_schedule($eid) {
        $this->db->select('*');
        $this->db->from('time');
        $this->db->order_by('start_time');
        $this->db->where('event_id', $eid);
        $query=$this->db->get();
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
    public function get_event_fee_amount($eid,$cnt){
        $resultfee=$this->db->query("SELECT fee_type ,reg_fee from events where event_id=".$eid);
        $fee_type= $resultfee->row()->fee_type;
        if($fee_type=='head')
        {
            $registrants_amnt=$cnt*$resultfee->row()->reg_fee;
        }//session for pay.php
        elseif ($fee_type=='team') {
            {
                $registrants_amnt=$resultfee->row()->reg_fee;
            }//session for pay.php
        }
        return $registrants_amnt;
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
        if($cnt->num_rows()==1){
            return $cnt->row()->accommodation;

        }else{
            return 0;

        }
    }
    public function get_user_info($email){
        $cnt=$this->db->query("SELECT * from users where email='".$email."'");
        return $cnt->row();
    }
    public function get_book_status($eid){
        if(!isset($_SESSION['email']))return 0;
        $cnt=$this->db->query("SELECT count(*) As Cnt from registration where member_email='".$_SESSION['email']."' and event_id=".$eid);
        return $cnt->row()->Cnt;
    }
    public function get_event_status_result($eid){

        $cnt=$this->db->query("SELECT * from result r left join users u on r.email=u.email where event_id=".$eid);
        return $cnt->result_array();
    }
    public function insert_reg_spot_temp($data){
            return $this->db->insert('registration',$data);
    }



}
?>