<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Universitas extends CI_Controller {
    public function index()
    {
        $css['css'] = "home.css";
        $this->load->view('templates/navbar',$css);
        $this->load->view('content/home');
        $this->load->view('templates/footer');
    }

    public function tentang()
    {
        $css['css'] = "tentang.css";
        $this->load->view('templates/navbar',$css);
        $this->load->view('content/tentang');
        $this->load->view('templates/footer');
    }

    public function akademik()
    {
        $css['css'] = "akademik.css";
        $this->load->view('templates/navbar',$css);
        $this->load->view('content/akademik');
        $this->load->view('templates/footer');
    }

    public function people()
    {
        $css['css'] = "people.css";
        $this->load->view('templates/navbar',$css);
        $this->load->view('content/people');
        $this->load->view('templates/footer');
    }

    public function hubungi()
    {
        $css['css'] = "hubungi.css";
        $this->load->view('templates/navbar',$css);
        $this->load->view('content/hubungi');
        $this->load->view('templates/footer');
    }

    public function daftar()
    {
        $css['css'] = "daftar.css";
        $this->load->view('templates/navbar',$css);
        $this->load->view('content/daftar');
        $this->load->view('templates/footer');
    }

    public function kampus()
    {
        $css['css'] = "kampus.css";
        $this->load->view('templates/navbar',$css);
        $this->load->view('content/kampus');
        $this->load->view('templates/footer');
    }
}