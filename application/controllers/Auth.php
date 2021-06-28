<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    // code...
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index()
  {
    // // code...
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
      // code...
      $data['title'] = 'YBB Foundation';
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/login');
      $this->load->view('templates/auth_footer');
    } else {
      // sukses
      $this->_login();
    }
  }

  private function _login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    // code...

    $admin = $this->db->get_where('admins', ['username' => $username])->row_array();

    if ($admin) {
      // user aktif...
        // cek password...
        if ($password == $admin['password']) {
          // code...
          $data = [
            'username' => $admin['username'],
          ];
          $this->session->set_userdata($data);
          redirect('admin');
        }else {
          // code...
          $this->session->set_flashdata('message', '<div class = "alert alert-danger" role
          = "alert"> Wrong Password!</div>');
          redirect('auth');
        }
    }else {
      // code...
      $this->session->set_flashdata('message', '<div class = "alert alert-danger" role
      = "alert"> Admin not found!</div>');
      redirect('auth');
    }
  }

  // public function registration()
  // {
  //   // code...
  //   $this->form_validation->set_rules('name', 'Name', 'required|trim');
  //   $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',
  // [
  //   'is_unique' => 'This email already registered!'

  // ]);
  //   $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',[
  //     'matches' => 'password not match!',
  //     'min_length' => 'at least 3 character'
  //   ]);
  //   $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

  //   if ($this->form_validation->run() == false) {
  //     // code...
  //     $data['title'] = 'YBB Foundation';
  //     $this->load->view('templates/auth_header', $data);
  //     $this->load->view('auth/registration');
  //     $this->load->view('templates/auth_footer');
  //   } else {
  //     $data = [
  //       'name' => htmlspecialchars($this->input->post('name', true)),
  //       'email' => htmlspecialchars($this->input->post('email', true)),
  //       'image' => 'default.jpg',
  //       'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
  //       'role_id' => 2,
  //       'is_active' => 1,
  //       'date_created' => time()
  //     ];

  //     $this->db->insert('user', $data);
  //     $this->session->set_flashdata('message', '<div class = "alert alert-success" role
  //     = "alert"> Congratulation! Your Account Has Been Created. Please Login!</div>');
  //     redirect('auth');
  //   }

  // }

  public function logout()
  {
    // code...
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role_id');

    $this->session->set_flashdata('message', '<div class = "alert alert-success" role
    = "alert"> You have been Logout!</div>');
    redirect('auth');
  }
}
