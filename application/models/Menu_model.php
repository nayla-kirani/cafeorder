<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

    public function get_all()
    {
        $this->db->select('menu.*, kategori.nama_kategori');
        $this->db->from('menu');
        $this->db->join('kategori', 'kategori.id_kategori = menu.id_kategori');

        return $this->db->get()->result();
    }

    public function insert($data)
    {
        return $this->db->insert('menu', $data);
    }

    public function get_by_id($id)
    {
        return $this->db
            ->get_where('menu', ['id_menu'=>$id])
            ->row();
    }

    public function update($id, $data)
    {
        return $this->db
            ->where('id_menu', $id)
            ->update('menu', $data);
    }

    public function delete($id)
    {
        return $this->db
            ->where('id_menu', $id)
            ->delete('menu');
    }

}