<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Chart_model extends CI_Model
{
    public function get_participant_total_count()
    {
        $num_rows = $this->db->count_all_results('participant_details');
        return $num_rows;
    }

    public function get_valid_participant_total_count()
    {
        $this->db->where('status', 2);
        $num_rows = $this->db->count_all_results('participants');
        return $num_rows;
    }

    public function get_fixed_participant_total_count()
    {
        $this->db->where('status', 4);
        $num_rows = $this->db->count_all_results('participants');
        return $num_rows;
    }

    public function get_pending_payment_total_count()
    {
        $this->db->where('payment_status', 0);
        $num_rows = $this->db->count_all_results('payments');
        return $num_rows;
    }


    public function get_gender()
    {
        $query = "SELECT gender, COUNT(gender) AS `jumlah` FROM participant_details GROUP BY gender";
        return $this->db->query($query)->result_array();
    }

    public function get_nationality()
    {
        $query = "SELECT nationality, count(nationality) AS `total` from participant_details GROUP by nationality";
        return $this->db->query($query)->result_array();
    }

    public function get_subtheme()
    {
        $query = "SELECT subtheme, count(subtheme) AS `total` from participant_details GROUP by subtheme";
        return $this->db->query($query)->result_array();
    }

    public function get_age()
    {
        $query = "SELECT TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) AS age, count(TIMESTAMPDIFF(YEAR, birthdate, CURDATE())) AS total from participant_details group by age";
        return $this->db->query($query)->result_array();
    }

    public function get_register_per_day()
    {
        $query = "SELECT date(created_date) as created_date, COUNT(date(created_date)) as total from participants GROUP by date(created_date)";
        return $this->db->query($query)->result_array();
    }
}
