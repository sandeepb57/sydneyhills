<?php
class AdminDashboardModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getDashboardDetails()
    {
        $this->db->query('call dashboarddetails(@total_rides, @completed, @cancelled, @total_horses)');
        $dashboard = $this->db->query('SELECT @total_rides as total_rides, @completed as completed, @cancelled as cancelled, @total_horses as total_horses;');
        if ($dashboard) {
            return $dashboard->result_array()[0];
        } else {
            return false;
        }
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

    public function getAllHorsesFromDB()
    {
        $this->db->order_by("addedDate", "DESC");
        $response = $this->db->get("typeofhorses");
        if (is_array($response->result_array()) && sizeof($response->result_array()) > 0) {
            return $response->result_array();
        } else {
            return false;
        }
    }

    public function setHorseSubmissionDB($horseFormArray)
    {
        $response = $this->db->insert("typeofhorses", $horseFormArray);
        if ($response) {
            return true;
        } else {
            return false;
        }
    }

    public function setDenyBookingById($dataArray, $condArray)
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
