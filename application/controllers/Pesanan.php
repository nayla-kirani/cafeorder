
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login'))
        {
            redirect('auth');
        }

        $this->load->model('Pesanan_model');
    }

    public function index()
    {
        $data['pesanan'] = $this->Pesanan_model->get_all();

        $this->load->view('pesanan/index', $data);
    }

    public function tambah()
    {
        $data['meja'] = $this->db->get('meja')->result();
        $data['pelanggan'] = $this->db->get('pelanggan')->result();

        $this->load->view('pesanan/tambah', $data);
    }

    public function simpan()
    {
        $data = [
            'id_meja'      => $this->input->post('id_meja'),
            'id_pelanggan' => $this->input->post('id_pelanggan'),
            'tanggal'      => date('Y-m-d H:i:s'),
            'total_harga'  => 0,
            'status'       => 'Menunggu'
        ];

        $this->Pesanan_model->insert($data);

        redirect('pesanan');
    }

    public function edit($id)
{
    $data['pesanan'] = $this->Pesanan_model->get_by_id($id);

    $data['meja'] = $this->db->get('meja')->result();

    $data['pelanggan'] = $this->db->get('pelanggan')->result();

    $this->load->view('pesanan/edit', $data);
}

public function update()
{
    $id = $this->input->post('id_pesanan');

    $data = [
        'id_meja'      => $this->input->post('id_meja'),
        'id_pelanggan' => $this->input->post('id_pelanggan'),
        'status'       => $this->input->post('status')
    ];

    $this->Pesanan_model->update(
        $id,
        $data
    );

    redirect('pesanan');
}

    public function hapus($id)
    {
        $this->Pesanan_model->delete($id);

        redirect('pesanan');
    }

}

