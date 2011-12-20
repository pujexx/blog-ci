<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data["content"]="post";
        $this->load->view("template",$data);
    }

}
?>
