<?php
class LoginRegisterModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function CustomerLogin($loginData)
    {
        $result_array = array(
            "status" => array(),
            "data" => array(),
        );
        $this->db->select("*");
        $this->db->from("customers");
        $this->db->where($loginData);
		$custLogin = $this->db->get();
		// echo $this->db->last_query();
        if (sizeof($custLogin->result_array()) > 0) {
            $result_array['status'] = 'OK';
            $result_array['data'] = $custLogin->result_array();
            return $result_array;
        } else {
            $result_array['status'] = 'BAD';
            $result_array['data'] = '';
            return $result_array;
        }
    }

    public function RegisterCustomers($custData)
    {
        $res = $this->db->insert("customers", $custData);
        // echo $this->db->last_query();
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
}
