<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Country_model', 'country');
    }

    public function index()
    {
        $data['countries'] = $this->country->get_countries();
        $this->load->view('auth/registration',$data);
    }
}
