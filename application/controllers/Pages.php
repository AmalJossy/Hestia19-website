<?php
class Pages extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('google');
    }
    public function view($page = 'home'){
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data['google_login_url']=$this->google->get_login_url();
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $db = $this->load->database();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}