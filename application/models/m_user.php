<?php
class m_user extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function verify($username,$password){
        $this->db->where("username",$username);
        $this->db->where("password",md5($password));
        $result = $this->db->get("user");
        if ($result->num_rows() == 1) {
            return $result->row_array();
        }
    }

}
?>
