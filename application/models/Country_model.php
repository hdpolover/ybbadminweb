<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Country_model extends CI_Model
{
    public function get_countries($id = null)
    {
        if ($id == null) {
            return $this->db->get('countries')->result_array();
        } else {
            return $this->db->get_where('countries', ['id' => $id])->result_array();
        }
    }
}
