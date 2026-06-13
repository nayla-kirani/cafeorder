<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login'))
        {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['jumlah_menu'] = $this->db->count_all('menu');

        $data['jumlah_meja'] = $this->db->count_all('meja');

        $data['jumlah_pelanggan'] = $this->db->count_all('pelanggan');

        $data['jumlah_pesanan'] = $this->db->count_all('pesanan');

        $data['jumlah_user'] = $this->db->count_all('users');

        $data['judul'] = 'Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

}