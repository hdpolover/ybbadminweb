<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mealtype extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mealtype_model','mealtype');
    //$this->load->library('form_validation');
  }

  public function index()
  {
    // code...
    //$data['title'] = 'Data Peserta';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['mealtype'] = $this->mealtype->get_mealtype();
    //$data['peserta'] = $this->Peserta_model->campurData();
    // if( $this->input->post('keyword') ) {
    //     $data['peserta'] = $this->Peserta_model->cariDataMahasiswa();
    // }

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('mealtype/index', $data);
    $this->load->view('templates/footer');
  }

   public function add_mealtype()
  {
    // code...
    $data['title'] = 'Add New Meal Type';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('mealtype/add_mealtype');
    $this->load->view('templates/footer');
  }
  public function create_new_meal()
    {
        $desc = $this->input->post('desc');
        $meal_data = array(
            'desc' => $desc, 
            
        );

        $this->mealtype->create_mealtype($meal_data);

        $this->session->set_flashdata('message', '<div class ="alert alert-success" style="text-align-center" role ="alert"> Congratulations! You successfully created a new summit.</div>');
        redirect('mealtype/index');
    }
}
