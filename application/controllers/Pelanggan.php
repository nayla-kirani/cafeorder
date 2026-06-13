<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

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

        $this->load->model('Pelanggan_model');
    }

    public function index()
    {
        $data['pelanggan'] = $this->Pelanggan_model->get_all();

        $this->load->view('pelanggan/index', $data);
    }

    public function tambah()
    {
        $this->load->view('pelanggan/tambah');
    }

    public function simpan()
    {
        $data = array(
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'no_hp' => $this->input->post('no_hp')
        );

        $this->Pelanggan_model->insert($data);

        redirect('pelanggan');
    }

    public function edit($id)
    {
        $data['pelanggan'] = $this->Pelanggan_model->get_by_id($id);

        $this->load->view('pelanggan/edit', $data);
    }

    public function update()
    {
        $id = $this->input->post('id_pelanggan');

        $data = array(
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'no_hp' => $this->input->post('no_hp')
        );

        $this->Pelanggan_model->update($id, $data);

        redirect('pelanggan');
    }

    public function hapus($id)
    {
        $this->Pelanggan_model->delete($id);

        redirect('pelanggan');
    }

}