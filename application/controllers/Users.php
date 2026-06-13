<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // harus login
        if(!$this->session->userdata('login'))
        {
            redirect('auth');
        }

        // hanya admin yang boleh mengakses
        if($this->session->userdata('role') != 'admin')
        {
            redirect('dashboard');
        }

        $this->load->model('Users_model');
    }

    public function index()
    {
        $data['users'] = $this->Users_model->get_all();

        $this->load->view('users/index', $data);
    }

    public function tambah()
    {
        $this->load->view('users/tambah');
    }

    public function simpan()
    {
        $data = [
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'role'     => $this->input->post('role')
        ];

        $this->Users_model->insert($data);

        redirect('users');
    }

    public function edit($id)
    {
        $data['user'] = $this->Users_model->get_by_id($id);

        $this->load->view('users/edit', $data);
    }

    public function update()
    {
        $id = $this->input->post('id_user');

        $data = [
            'username' => $this->input->post('username'),
            'role'     => $this->input->post('role')
        ];

        if($this->input->post('password') != '')
        {
            $data['password'] = md5(
                $this->input->post('password')
            );
        }

        $this->Users_model->update($id, $data);

        redirect('users');
    }

    public function hapus($id)
    {
        $this->Users_model->delete($id);

        redirect('users');
    }

}