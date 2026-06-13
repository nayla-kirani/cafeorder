<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_pesanan_model extends CI_Model {

    private $table = 'detail_pesanan';

    public function get_all()
    {
        $this->db->select('
            detail_pesanan.*,
            menu.nama_menu,
            pesanan.id_pesanan
        ');

        $this->db->from('detail_pesanan');

        $this->db->join(
            'menu',
            'menu.id_menu = detail_pesanan.id_menu'
        );

        $this->db->join(
            'pesanan',
            'pesanan.id_pesanan = detail_pesanan.id_pesanan'
        );

        return $this->db->get()->result();
    }

    public function get_by_id($id)
    {
        return $this->db
                    ->get_where(
                        'detail_pesanan',
                        ['id_detail' => $id]
                    )
                    ->row();
    }

    public function insert($data)
    {
        return $this->db->insert(
            $this->table,
            $data
        );
    }

    public function delete($id)
    {
        return $this->db->delete(
            $this->table,
            ['id_detail' => $id]
        );
    }

}