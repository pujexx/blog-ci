<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("m_user");
    }

    function index() {
        $this->form_validation->set_rules("username", "username", "required");
        $this->form_validation->set_rules("password", "password", "required");
        if ($this->form_validation->run() == true) {
            $username = $this->input->post("username", true);
            $password = $this->input->post("password",true);
            $row = $this->m_user->verify($username,$password);
            print_r($row);
            if(count($row)>0){
                $this->session->set_userdata("id",$row["id"]);
                redirect("admin");
            }
        }
        $data["content"]="login";
        $this->load->view("template",$data);
    }

}
?>
