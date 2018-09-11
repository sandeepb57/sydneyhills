<?php
class BookHorsesModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function SubmitBookingDetails($bookingDetails)
    {
        $this->db->insert("bookingdetails", $bookingDetails);
        $insert_id = $this->db->insert_id();
        if ($insert_id > 0) {
            return $insert_id;
        } else {
            return false;
        }
    }

    public function SubmitBookingRiderDetails($bookingRiderDetails)
    {
        $this->db->insert("bookingridersdetails", $bookingRiderDetails);
        $insert_id = $this->db->insert_id();
        if ($insert_id > 0) {
            return $insert_id;
        } else {
            return false;
        }
    }

    public function FetchBookingDetailsById($bookingId)
    {
		$this->db->select("bd.customerId, bd.rideDate, bd.rideTime, bd.consecutiveWeek,bd.noOfRiders, bd.bookingStatus, bd.addedDate, brd.*, tr.rideTypeId, tr.typeOfRide, tr.rideAmount, al.abilityLevelId, al.abilityName");
		$this->db->from("bookingdetails bd");
		$this->db->join("bookingridersdetails brd", "brd.bookingId = bd.bookingId", "left");
		$this->db->join("typeofrides tr", "tr.rideTypeId = bd.typeOfRide", "left");
		$this->db->join("abilitylevel al", "al.abilityLevelId = brd.riderAbilityLevel", "left");
        $this->db->where("bd.bookingId", $bookingId);
        $this->db->where("bd.customerId", $this->session->userdata("customerId"));
        $bookingDetails = $this->db->get();
        // echo $this->db->last_query();
        if (sizeof($bookingDetails->result_array()) > 0) {
            return $bookingDetails->result_array();
        } else {
            return false;
        }
    }
}
