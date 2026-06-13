<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan_model extends CI_Model {

    public function get_all()
    {
        $this->db->select('
    pesanan.id_pesanan,
    pesanan.tanggal,
    pesanan.total_harga,
    pesanan.status,
    meja.nomor_meja,
    pelanggan.nama_pelanggan
');

        $this->db->from('pesanan');

        $this->db->join(
            'meja',
            'meja.id_meja = pesanan.id_meja'
        );

        $this->db->join(
            'pelanggan',
            'pelanggan.id_pelanggan = pesanan.id_pelanggan'
        );

        return $this->db->get()->result();
    }

    public function insert($data)
    {
        return $this->db->insert('pesanan', $data);
    }

    public function delete($id)
    {
        return $this->db->delete(
            'pesanan',
            ['id_pesanan' => $id]
        );
    }
     public function get_by_id($id)
{
    return $this->db
                ->get_where(
                    'pesanan',
                    ['id_pesanan'=>$id]
                )
                ->row();
}

public function update($id,$data)
{
    $this->db->where(
        'id_pesanan',
        $id
    );

    return $this->db->update(
        'pesanan',
        $data
    );
}
}