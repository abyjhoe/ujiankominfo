<?php
defined('BASEPATH') or exit('No direct script access allowed');
class cekstokbarang_model extends CI_Model
{
    public function cekstok()
    {
        $query = "  SELECT * 
                    FROM `barang` 
                    WHERE `volume` <5
                    ";
        return $this->db->query($query)->result_array();
    }

    public function cekjenisbarang()
    {
        $query = "  SELECT COUNT(*) as total
                    FROM `barang`";
        return $this->db->query($query)->row_array();
    }

    public function cekadmin()
    {
        $query = "  SELECT COUNT(*) as adm
                    FROM `user`
                    WHERE `role_id` = 1";
        return $this->db->query($query)->row_array();
    }

    public function cekopr()
    {
        $query = "  SELECT COUNT(*) as opr
                    FROM `user`
                    WHERE `role_id` = 2";
        return $this->db->query($query)->row_array();
    }

    public function cekworker()
    {
        $query = "  SELECT COUNT(*) as worker
                    FROM `user`
                    WHERE `role_id` = 3";
        return $this->db->query($query)->row_array();
    }

    public function cekcustomer()
    {
        $query = "  SELECT COUNT(*) as cust
                    FROM `user`
                    WHERE `role_id` = 4";
        return $this->db->query($query)->row_array();
    }
}
