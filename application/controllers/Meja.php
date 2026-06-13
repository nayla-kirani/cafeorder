<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meja extends CI_Controller {

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

        $this->load->model('Meja_model');
    }

    public function index()
    {
        $data['meja'] = $this->Meja_model->get_all();

        $this->load->view('meja/index', $data);
    }

    public function tambah()
    {
        $this->load->view('meja/tambah');
    }

    public function simpan()
    {
        $data = array(
            'nomor_meja' => $this->input->post('nomor_meja'),
            'status' => $this->input->post('status')
        );

        $this->Meja_model->insert($data);

        redirect('meja');
    }

    public function edit($id)
    {
        $data['meja'] = $this->Meja_model->get_by_id($id);

        $this->load->view('meja/edit', $data);
    }

    public function update()
    {
        $id = $this->input->post('id_meja');

        $data = array(
            'nomor_meja' => $this->input->post('nomor_meja'),
            'status' => $this->input->post('status')
        );

        $this->Meja_model->update($id, $data);

        redirect('meja');
    }

    public function hapus($id)
    {
        $this->Meja_model->delete($id);

        redirect('meja');
    }

}