<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Meal_attendance extends RestController
{

    public function __construct()
    {
        // code...
        parent::__construct();
        $this->load->model('meal_attendance_model', 'meal_attendance');
    }

    public function index_get()
    {
        // code...
        $id = $this->get('id_meal_attendance');
        if ($id === NULL) {
            // code...
            $meal_attendance = $this->meal_attendance->get_meal_attendance();
        } else {
            // code...
            $meal_attendance = $this->meal_attendance->get_meal_attendance($id);
        }

        if ($meal_attendance) {
            // code...
            $this->response([
                'status' => true,
                'data' => $meal_attendance
            ],  RestController::HTTP_OK);
        } else {
            // code...
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ],  RestController::HTTP_NOT_FOUND);
        }
    }
}
