<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

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

        $this->load->model('Kategori_model');
    }

    public function index()
    {
        $data['judul'] = 'Kategori';
        $data['kategori'] = $this->Kategori_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Kategori';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'nama_kategori' => $this->input->post('nama_kategori')
        ];

        $this->Kategori_model->insert($data);

        redirect('kategori');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Kategori';
        $data['kategori'] = $this->Kategori_model->get_by_id($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_kategori');

        $data = [
            'nama_kategori' => $this->input->post('nama_kategori')
        ];

        $this->Kategori_model->update($id, $data);

        redirect('kategori');
    }

    public function hapus($id)
    {
        $this->Kategori_model->delete($id);

        redirect('kategori');
    }

}