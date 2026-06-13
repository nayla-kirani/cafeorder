<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

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
        $this->db->select('
            pesanan.*,
            pelanggan.nama_pelanggan,
            meja.nomor_meja
        ');

        $this->db->from('pesanan');

        $this->db->join(
            'pelanggan',
            'pelanggan.id_pelanggan = pesanan.id_pelanggan'
        );

        $this->db->join(
            'meja',
            'meja.id_meja = pesanan.id_meja'
        );

        $data['laporan'] = $this->db->get()->result();

        $this->load->view('laporan/index', $data);
    }

    public function cetak()
    {
        $this->db->select('
            pesanan.*,
            pelanggan.nama_pelanggan,
            meja.nomor_meja
        ');

        $this->db->from('pesanan');

        $this->db->join(
            'pelanggan',
            'pelanggan.id_pelanggan = pesanan.id_pelanggan'
        );

        $this->db->join(
            'meja',
            'meja.id_meja = pesanan.id_meja'
        );

        $data['laporan'] = $this->db->get()->result();

        $this->load->view('laporan/cetak', $data);
    }

}