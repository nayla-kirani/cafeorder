
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_pesanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login'))
        {
            redirect('auth');
        }

        $this->load->model('Detail_pesanan_model');
    }

    public function index()
    {
        $data['detail_pesanan'] = $this->Detail_pesanan_model->get_all();

        $this->load->view('detail_pesanan/index', $data);
    }

    public function tambah()
    {
        $this->db->select('
            pesanan.id_pesanan,
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

        $data['pesanan'] = $this->db->get()->result();

        $data['menu'] = $this->db->get('menu')->result();

        $this->load->view('detail_pesanan/tambah', $data);
    }

    public function simpan()
    {
        $jumlah = $this->input->post('jumlah');

        $menu = $this->db
                     ->get_where(
                         'menu',
                         ['id_menu' => $this->input->post('id_menu')]
                     )
                     ->row();

        $subtotal = $menu->harga * $jumlah;

        $data = [
            'id_pesanan' => $this->input->post('id_pesanan'),
            'id_menu'    => $this->input->post('id_menu'),
            'jumlah'     => $jumlah,
            'subtotal'   => $subtotal
        ];

        $this->db->insert('detail_pesanan', $data);

        $this->db->select_sum('subtotal');
        $this->db->where(
            'id_pesanan',
            $this->input->post('id_pesanan')
        );

        $total = $this->db
                      ->get('detail_pesanan')
                      ->row()
                      ->subtotal;

        $this->db->where(
            'id_pesanan',
            $this->input->post('id_pesanan')
        );

        $this->db->update(
            'pesanan',
            [
                'total_harga' => $total
            ]
        );

        redirect('detail_pesanan');
    }

    public function edit($id)
    {
        $data['detail'] = $this->Detail_pesanan_model->get_by_id($id);

        $data['pesanan'] = $this->db->get('pesanan')->result();
        $data['menu'] = $this->db->get('menu')->result();

        $this->load->view('detail_pesanan/edit', $data);
    }

    public function update()
    {
        $id_detail = $this->input->post('id_detail');
        $id_pesanan = $this->input->post('id_pesanan');

        $menu = $this->db
                     ->get_where(
                         'menu',
                         ['id_menu' => $this->input->post('id_menu')]
                     )
                     ->row();

        $subtotal = $menu->harga * $this->input->post('jumlah');

        $data = [
            'id_pesanan' => $id_pesanan,
            'id_menu'    => $this->input->post('id_menu'),
            'jumlah'     => $this->input->post('jumlah'),
            'subtotal'   => $subtotal
        ];

        $this->db->where(
            'id_detail',
            $id_detail
        );

        $this->db->update(
            'detail_pesanan',
            $data
        );

        $this->db->select_sum('subtotal');
        $this->db->where(
            'id_pesanan',
            $id_pesanan
        );

        $total = $this->db
                      ->get('detail_pesanan')
                      ->row()
                      ->subtotal;

        $this->db->where(
            'id_pesanan',
            $id_pesanan
        );

        $this->db->update(
            'pesanan',
            [
                'total_harga' => $total
            ]
        );

        redirect('detail_pesanan');
    }

    public function hapus($id)
    {
        $detail = $this->db
                       ->get_where(
                           'detail_pesanan',
                           ['id_detail' => $id]
                       )
                       ->row();

        $id_pesanan = $detail->id_pesanan;

        $this->Detail_pesanan_model->delete($id);

        $this->db->select_sum('subtotal');
        $this->db->where(
            'id_pesanan',
            $id_pesanan
        );

        $total = $this->db
                      ->get('detail_pesanan')
                      ->row()
                      ->subtotal;

        if($total == NULL)
        {
            $total = 0;
        }

        $this->db->where(
            'id_pesanan',
            $id_pesanan
        );

        $this->db->update(
            'pesanan',
            [
                'total_harga' => $total
            ]
        );

        redirect('detail_pesanan');
    }

}

