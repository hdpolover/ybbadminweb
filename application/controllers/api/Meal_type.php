<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Meal_type extends RestController
{

    public function __construct()
    {
        // code...
        parent::__construct();
        $this->load->model('meal_type_model', 'meal_type');
    }

    public function index_get()
    {
        // code...
        $id = $this->get('id_meal_type');
        if ($id === NULL) {
            // code...
            $meal_type = $this->meal_type->get_meal_type();
        } else {
            // code...
            $meal_type = $this->meal_type->get_meal_type($id);
        }

        if ($meal_type) {
            // code...
            $this->response([
                'status' => true,
                'data' => $meal_type
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
