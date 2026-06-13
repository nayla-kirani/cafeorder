<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    public function get_all()
    {
        return $this->db->get('kategori')->result();
    }

    public function get_by_id($id)
    {
        return $this->db
                    ->where('id_kategori', $id)
                    ->get('kategori')
                    ->row();
    }

    public function insert($data)
    {
        $this->db->insert('kategori', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_kategori', $id);
        $this->db->update('kategori', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }

}