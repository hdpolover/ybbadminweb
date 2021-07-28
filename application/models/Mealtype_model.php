<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Mealtype_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function get_mealtype($id_meal_type = null)
    {
        if ($id_meal_type == null) {
            return $this->db->get('meal_type')->result_array();
        } else {
            return $this->db->get_where('meal_type', ['id_meal_type' => $id])->result_array();
        }
    }

  public function create_mealtype($data)
  {
    $data = array(
      'description' => $data['desc'],
    );

    $this->db->insert('meal_type', $data);
  }

  

  // public function get_by_id($id)
  // {
  //   $this->db->where('id_summit', $id);
  //   $result = $this->db->get('summits');

  //   if ($result->num_rows() == 1) {
  //     return $result->row_array();
  //   } else {
  //     return false;
  //   }
  // }
}
