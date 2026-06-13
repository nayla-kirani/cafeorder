<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login'))
        {
            redirect('auth');
        }

        if($this->session->userdata('role') != 'admin')
        {
            redirect('dashboard');
        }

        $this->load->model('Menu_model');
    }

    public function index()
    {
        $data['judul'] = 'Menu';
        $data['menu'] = $this->Menu_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('menu/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Menu';
        $data['kategori'] = $this->db->get('kategori')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('menu/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'nama_menu' => $this->input->post('nama_menu'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'id_kategori' => $this->input->post('id_kategori')
        ];

        $this->Menu_model->insert($data);

        redirect('menu');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Menu';
        $data['menu'] = $this->Menu_model->get_by_id($id);
        $data['kategori'] = $this->db->get('kategori')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('menu/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_menu');

        $data = [
            'nama_menu' => $this->input->post('nama_menu'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'id_kategori' => $this->input->post('id_kategori')
        ];

        $this->Menu_model->update($id, $data);

        redirect('menu');
    }

    public function hapus($id)
    {
        $this->Menu_model->delete($id);

        redirect('menu');
    }

}