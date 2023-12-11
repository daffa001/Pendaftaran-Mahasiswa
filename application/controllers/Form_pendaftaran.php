<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_pendaftaran extends CI_Controller {
    public $mahasiswa;
    public $jurusan;
    public $prodi;
  
    public function __construct()
    {
      parent::__construct();
  
      $this->load->library('form_validation');
  
      $this->load->model('Mahasiswa_model');
      $this->load->model('Jurusan_model');
      $this->load->model('Prodi_model');
  
      $this->mahasiswa = new Mahasiswa_model;
      $this->load->model('M_pendaftaran','mp');
      $this->jurusan = new Jurusan_model;
      $this->prodi = new Prodi_model;
    }
    public function pendaftaran()
    {
        $data['jurusan'] = $this->jurusan->get_all();
        $data['prodi_all'] = $this->prodi->get_all();
    
        // Load CodeIgniter's form validation library
        $this->load->library('form_validation');
    
        // Set validation rules for each form field
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('nik', 'Nomor Identitas (NIK)', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu Kandung', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan Terakhir', 'required');
        $this->form_validation->set_rules('sekolah', 'Nama Sekolah', 'required');
        $this->form_validation->set_rules('nilai_raport', 'Rata-rata Nilai Rapor Kelas 12', 'required');
        $this->form_validation->set_rules('jurusan_id', 'Pilih Program Studi 1', 'required');
        $this->form_validation->set_rules('prodi_id', 'Pilih Program Studi 2', 'required');
    
        // Check if the form passed validation
        if ($this->form_validation->run() === FALSE) {
            $data1['error_message'] = 'Mohon mengisi semua kolom dengan benar.';
            // If validation fails, reload the form with validation errors
            $this->load->view('Content/pendaftaran', $data,$data1);
        } else {
            // If validation passes, proceed with form submission
            $this->mp->insert_data();
            redirect(base_url('Universitas/kampus'));
        }
    }
    
}