<?php
class CommonServicesModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getTypeOfRides()
    {
        $this->db->select("rideTypeId, typeOfRide, rideAmount");
        $this->db->where("typeOfRidesStatus", 1);
        $this->db->order_by('rideTypeId', "ASC");
        $typeOfRides = $this->db->get("typeofrides");
        // echo $this->db->last_query();
        if (is_array($typeOfRides->result_array()) && sizeof($typeOfRides->result_array()) > 0) {
            return $typeOfRides->result_array();
        } else {
            return false;
        }
    }
}
