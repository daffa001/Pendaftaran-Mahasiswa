<?php

class M_pendaftaran extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    public function get_all()
    {
      $this->db->from('tb_mahasiswa as m');
      $this->db->select('m.id,m.nama, m.alamat, m.no_hp, p.nama_prodi, j.nama_jurusan');
      $this->db->join('tb_prodi as p', 'm.prodi_id = p.id', 'left');
      $this->db->join('tb_jurusan as j', 'm.jurusan_id = j.id', 'left');
      $this->db->order_by('m.id', 'desc');
  
      $query = $this->db->get();
  
      return $query->result();
    }
    function insert_data()
    {
        $nama_fields = [
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jk' => $this->input->post('jk'),
            'kewarganegaraan' => $this->input->post('kewarganegaraan'),
            'agama' => $this->input->post('agama'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'no_hp' => $this->input->post('no_telp'),
            'alamat' => $this->input->post('alamat'),
            'kode_pos' => $this->input->post('kode_pos'),
            'provinsi' => $this->input->post('provinsi'),
            'kabupaten' => $this->input->post('kabupaten'),
            'kecamatan' => $this->input->post('kecamatan'),
            'pendidikan' => $this->input->post('pendidikan'),
            'sekolah' => $this->input->post('sekolah'),
            'email' => $this->input->post('email'),
            'jurusan_id' => $this->input->post('jurusan_id'),
            'prodi_id' => $this->input->post('prodi_id'),
            'nilai_raport' => $this->input->post('nilai_raport'),
        ];



        $this->db->insert('tb_mahasiswa', $nama_fields);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
        Data mahasiswa berhasil ditambahkan.
        </div>'
        );
    }
}
