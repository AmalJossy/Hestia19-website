<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spot extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();
        $this->load->model('report_model');
    }
    public function home()
    {

        $data['categories']=$this->report_model->get_categories();
        $this->load->view('spot_home',$data);
    }
    public function get_events_list($cat_id){
        echo json_encode($this->report_model->get_events($cat_id));

    }
    function ProcessUserRequest($eid){
        $islogged=false;


            $team_size=$this->report_model->get_team_size($eid);

            if($team_size->min_memb==1  && $team_size->max_memb==1){
                echo "[201,$team_size->min_memb,$team_size->max_memb]";
            }else{
                echo "[201,$team_size->min_memb,$team_size->max_memb]";
            }




    }
}
