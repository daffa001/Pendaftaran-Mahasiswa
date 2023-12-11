<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    cek_login();
  }
  public function index()
  {
    $data['judul'] = 'Dashboard';
    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    // $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
    // $data['buku'] = $this->ModelBuku->getBuku()->result_array();
    $this->load->view('theme/header', $data);
    // $this->load->view('theme/navbar', $data);
    $this->load->view('theme/script', $data);
    $this->load->view('theme/index', $data);
    $this->load->view('theme/footer', $data);
  }
}
