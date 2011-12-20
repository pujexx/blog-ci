<?php

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        if($this->session->userdata("login")!=true){
            redirect("login");
        }
    }

    function index() {
        $data["content"]="admin";
        $this->load->view("template",$data);
    }

    function logout() {
        $this->session->unset_userdata("id");
        $this->session->unset_userdata("login");
        redirect("login");
    }
    function newpost(){
        
    }

}
?>
