<?php

class M_home extends CI_Model
{
    public function insertPesanan($data)
    {
        $result = $this->db->insert('pesanan', $data);
        return $result;
    }
}
