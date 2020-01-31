<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

 public function __construct() {
   parent::__construct();
   $this->load->model('m_admin');
   $this->load->model('m_petugas');
 }
 public function index() {
   if(isset($_SESSION['username'])) {
    redirect(site_url('admin'));
  } else if(isset($_SESSION['nip'])) {
    redirect(site_url('petugas'));
  }
  $this->load->view('view_masuk');
}
public function cekMasuk() {
  if (isset($_POST['submit'])) {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $loginAdmin = $this->m_admin->chekLogin($username, $password);
    $loginPetugas = $this->m_petugas->chekLogin($username, $password);

    if (!empty($loginAdmin)) {
      $this->session->set_userdata($loginAdmin);
      $this->session->set_flashdata('berhasil', 'kamu berhasil masuk ...');
      redirect('admin');

    } elseif (!empty($loginPetugas)) {
      $this->session->set_userdata($loginPetugas);
      $this->session->set_flashdata('berhasil', 'kamu berhasil masuk ...');
      redirect('petugas');

    } else {
      $this->session->set_flashdata('gagal', 'maaf, username / password kamu salah !');
      redirect();
    } 

  } else {
    $this->session->set_flashdata('gagal', 'maaf, username / password kamu salah !');
    redirect();
    
  }
}
public function keluar() {
  $this->session->sess_destroy();
  $this->session->set_flashdata('keluar', 'Kamu berhasil keluar ...');
  redirect();
}
}	
