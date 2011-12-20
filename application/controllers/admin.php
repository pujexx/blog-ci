<?php

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        if($this->session->userdata("login")!=true){
            redirect("login");
        }
    }

    function index() {
        echo "Admin";
    }

    function logout() {
        $this->session->unset_userdata("id");
        $this->session->unset_userdata("login");
        redirect("login");
    }

}
?>
