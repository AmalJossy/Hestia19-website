<?php
class Pages extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('report_model');
//        $this->load->library('Google');
    }
    function index(){
        $this->load->view('static/home');
    }
    function view($page){
        $this->load->view('static/'.$page);
    }
    function Event($cat){
        $cat_name=$this->security->xss_clean($cat);

        $data['events']=$this->report_model->get_events($cat_name);
        $this->load->view('static/event_listing',$data);
    }
    function SingleEvent($elink){
        $elink1=$this->security->xss_clean($elink);
       $data['event']=$this->report_model->get_single_event($elink1);
        $eid=$data['event']->event_id;
        $data['parent']=$this->report_model->get_event_cat_details($eid)->cat_name;
        $today = date('Y-m-d');
        $startdate=date('Y-m-d', strtotime($data['event']->reg_start));
        $enddate = date('Y-m-d', strtotime($data['event']->reg_end));
        $cnt=$this->report_model->get_event_reg_count($eid);
        if (($today >= $startdate) && ($today <= $enddate)){

            if($cnt<$data['event']->seats){
                $btn="<a href='#' class='btn btn-custom btn-primary'>BUY TICKET&nbsp;<i class='fas fa-shopping-cart'></i></a>";
            }else{
                $btn="<a href='#' class='btn btn-custom btn-danger disabled'>Sold Out&nbsp;<i class='fas fa-shopping-cart'></i></a>";
            }

        }else{

            if(($startdate  > $today)){
                $dtstart = date_create($startdate);
                $btn="<a href='#' class='btn btn-warning btn-custom disabled'>Registration Starts on ".date_format($dtstart, 'd-m-Y')."&nbsp;<i class='fas fa-clock'></i></a>";

            }
            if(($today > $enddate)){
                $btn="<a href='#' class='btn btn-danger btn-custom disabled'>Registration Closed&nbsp;<i class='fas fa-shopping-cart'></i></a>";

            }
        }

       $data['islogged']=false; //#TODO
       $data['btn']=$btn;

        $this->load->view('static/single_event',$data);
    }
    function ProcessUserRequest($eid){
        $islogged=true; //#todo
        if($islogged==true){
                $team_size=$this->report_model->get_team_size($eid);

                if($team_size->min_memb==1  && $team_size->max_memb==1){
                    echo '[200,"Success","Success"]';
                }else{
                    echo "[201,$team_size->min_memb,$team_size->max_memb]";
                }


        }else{
            echo '[505,"Login Required","Please Login to continue"]';
        }

    }

//    public function view($page = 'home'){
//        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
//            // Whoops, we don't have a page for that!
//            show_404();
//        }
//        $data['google_login_url']=$this->google->get_login_url();
//        $data['title'] = ucfirst($page); // Capitalize the first letter
//        $db = $this->load->database();
//        $this->load->view('templates/header', $data);
//        $this->load->view('pages/'.$page, $data);
//        $this->load->view('templates/footer', $data);
//    }
}