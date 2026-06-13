<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        $this->load->view('login');
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $user = $this->db->get_where('users', array(
            'username' => $username,
            'password' => $password
        ))->row();

        if($user)
        {
            $data = array(
                'id_user' => $user->id_user,
                'nama' => $user->nama,
                'role' => $user->role,
                'login' => TRUE
            );

            $this->session->set_userdata($data);

            redirect('dashboard');
        }
        else
        {
            $this->session->set_flashdata(
                'error',
                'Username atau Password salah'
            );

            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();

        header("Location: http://cafeorder.test/index.php/auth");
        exit;
    }
}