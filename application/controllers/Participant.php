<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Participant extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Participant_model', 'participant');
    $this->load->library('form_validation');
  }

  public function index()
  {
    // code...
    //$data['title'] = 'Data Peserta';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    //$data['peserta'] = $this->Peserta_model->campurData();
    $data['participants'] = $this->participant->get_participants();
    // if( $this->input->post('keyword') ) {
    //     $data['peserta'] = $this->Peserta_model->cariDataMahasiswa();
    // }

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('participant/index', $data);
    $this->load->view('templates/footer');
  }

  public function detail($id)
  {
    // code...
    $data['title'] = 'Detail Peserta';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['participants'] = $this->participant->get_participant_detail($id);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('participant/detail', $data);
    $this->load->view('templates/footer');
  }

  // public function hapus($id)
  // {
  //   // code...
  //   $this->peserta->hapusPeserta($id);
  //   redirect('peserta');
  // }

  public function tambah()
  {
    // code...
    $data['title'] = 'Add Participant';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['subtheme'] = ['Economy', 'Education','Public Policy', 'Mental Health'];
    $data['veget'] = ['1','0'];
    $data['tshirt'] = ['XS','S','M','L','XL','XXL','XXXL'];
    $data['program'] = ['WhatsApp','Facebook', 'Instagram', 'Twitter', 'Website', 'Other'];
    $data['gender'] = ['M','F'];
    $data['summits'] = $this->participant->getSummit();

    $this->form_validation->set_rules('fullname', 'Full Name', 'required');

    if ($this->form_validation->run() == false)  {
      // code...
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('participant/tambah', $data);
      $this->load->view('templates/footer');
    } else {
      // code...
      $this->participant->addParticipant();
      $this->session->set_flashdata('flash', 'Added');
      redirect('participant');
    }
  }

  public function edit($id)
  {
      $data['title'] = 'Form Edit Participant';
      $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
      $data['participant'] = $this->participant->get_participant_detail($id);
      $data['subtheme'] = ['Economy', 'Education','Public Policy', 'Mental Health'];
      $data['veget'] = ['1','0'];
      $data['tshirt'] = ['XS','S','M','L','XL','XXL','XXXL'];
      $data['program'] = ['WhatsApp','Facebook', 'Instagram', 'Twitter', 'Website', 'Other'];
      $data['gender'] = ['M','F'];

      $this->form_validation->set_rules('fullname', 'Full Name', 'required');

      if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar', $data);
      $this->load->view('participant/edit', $data);
      $this->load->view('templates/footer');
    }else {
      // code...
      $this->participant->editParticipant($id);
      $this->session->set_flashdata('flash', 'Updated');
      redirect('participant');
    }

  }

  public function full()
  {
    $data['title'] = 'Fully Funded Participants';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['participants'] = $this->participant->get_fullParticipants();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('participant/full', $data);
    $this->load->view('templates/footer');
  }

  public function tambahFull()
  {
    $data['title'] = 'Fully Funded Participants';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['participants'] = $this->participant->addlist_fullParticipants();
    $data['summits'] = $this->participant->getSummit();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('participant/tambahfull', $data);
    $this->load->view('templates/footer');
  }
  public function tambahin($id)
  {
    // code...
    $this->participant->add_fullParticipants($id);
    redirect('participant/full');
  }
}
