<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Summit_day extends RestController
{

    public function __construct()
    {
        // code...
        parent::__construct();
        $this->load->model('summit_day_model', 'summit_day');
    }

    public function index_get()
    {
        // code...
        $id = $this->get('id_summit_day');
        if ($id === NULL) {
            // code...
            $summit_day = $this->summit_day->get_summit_day();
        } else {
            // code...
            $summit_day = $this->summit_day->get_summit_day($id);
        }

        if ($summit_day) {
            // code...
            $this->response([
                'status' => true,
                'data' => $summit_day
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
