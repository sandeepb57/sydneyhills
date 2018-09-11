<?php
class AdminDashboardModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getAllBookings()
    {
        $this->db->select("c.firstName, c.lastName, c.primaryPhoneNumber, c.secondaryPhoneNumber, c.emailAddress, c.customerAddress, bd.bookingId, bd.customerId, bd.rideDate, bd.rideTime, bd.consecutiveWeek, bd.noOfRiders, bd.bookingStatus, bd.addedDate, bd.bookingStatusComments, bd.bookingAttended, tr.rideTypeId, tr.typeOfRide, tr.rideAmount");
        $this->db->from("bookingdetails bd");
        $this->db->join("customers c", "c.customerId = bd.customerId", "left");
        $this->db->join("typeofrides tr", "tr.rideTypeId = bd.typeOfRide", "left");
        $this->db->order_by("bd.rideDate", "DESC");
        $bookingDetails = $this->db->get();
        // echo $this->db->last_query();
        if (sizeof($bookingDetails->result_array()) > 0) {
            return $bookingDetails->result_array();
        } else {
            return false;
        }
    }
}
