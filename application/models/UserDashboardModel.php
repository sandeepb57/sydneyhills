<?php
class UserDashboardModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getUserBookings()
    {
        $this->db->select("bd.bookingId, bd.customerId, bd.rideDate, bd.rideTime, bd.consecutiveWeek,bd.noOfRiders, bd.bookingStatus, bd.bookingStatus, bd.addedDate, bd.bookingStatusComments, bd.bookingAttended, tr.rideTypeId, tr.typeOfRide, tr.rideAmount");
        $this->db->from("bookingdetails bd");
        $this->db->join("typeofrides tr", "tr.rideTypeId = bd.typeOfRide", "left");
        $this->db->where("bd.customerId", $this->session->userdata("customerId"));
        $this->db->order_by("bd.rideDate", "DESC");
        $bookingDetails = $this->db->get();
        // echo $this->db->last_query();
        if (sizeof($bookingDetails->result_array()) > 0) {
            return $bookingDetails->result_array();
        } else {
            return false;
        }
    }

    public function setCancelBookingById($dataArray, $condArray)
    {
        $this->db->where($condArray);
        $result = $this->db->update('bookingdetails', $dataArray);
        if ($result) {
            return true;
        } else {
            return false;
        }

    }
}
