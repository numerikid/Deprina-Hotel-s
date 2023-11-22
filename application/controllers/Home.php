<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_home');
    }

    public function index()
    {
        $this->load->view('partials/header');
        $this->load->view('index');
        $this->load->view('partials/footer');
    }

    public function tambah_pesanan()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'kelamin' => $this->input->post('kelamin'),
            'no_id' => $this->input->post('noid'),
            'tipe' => $this->input->post('tipe'),
            'tanggal' => $this->input->post('tanggal'),
            'durasi' => $this->input->post('durasi'),
            'sarapan' => $this->input->post('sarapan'),
            'total_bayar' => $this->input->post('bayar')
        );

        $insert_pesanan = $this->M_home->insertPesanan($data);
        if($insert_pesanan){
            $data = ['status'=>'true'];
            echo json_encode($data);
        } else {
            $data = ['status'=>'false'];
            echo json_encode($data);
        }
    }
}
