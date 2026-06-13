<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meja_model extends CI_Model {

    private $table = 'meja';

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id)
    {
        return $this->db
            ->get_where($this->table, array('id_meja' => $id))
            ->row();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        return $this->db
            ->where('id_meja', $id)
            ->update($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db
            ->where('id_meja', $id)
            ->delete($this->table);
    }

}