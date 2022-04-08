<?php
defined('BASEPATH') or exit('No direct script access allowed');
class project_model extends CI_Model
{
    public function hitungprojectentry()
    {
        $query = "  SELECT COUNT(*) as project_entry
                    FROM `project` where `project`.`status`='Entry'";
        return $this->db->query($query)->row_array();
    }

    public function hitungprojectproses()
    {
        $query = "  SELECT COUNT(*) as project_proses
                    FROM `project` where `project`.`status`='Proses'";
        return $this->db->query($query)->row_array();
    }

    public function hitungprojectselesai()
    {
        $query = "  SELECT COUNT(*) as project_selesai
                    FROM `project` where `project`.`status`='Selesai'";
        return $this->db->query($query)->row_array();
    }

    public function getpembuat()
    {
        $query = "  SELECT `project`.*,`user`.`name`
                    FROM `project` JOIN `user`
                    ON `user`.`id` = `project`.`created_by`
                    ";
        return $this->db->query($query)->row_array();
    }

    public function barang()
    {
        $query = "  SELECT * FROM `barang` WHERE `jenis`='Kain'
                    ";
        return $this->db->query($query)->result_array();
    }

    public function buatkode()
    {
        $nomor = $this->db->query("SELECT max(`kode_detail`) as kodeTerbesar FROM `project_detail`")->row_array();
        $nomor1 = $nomor['kodeTerbesar'];
        $urut = (int)substr($nomor1, 4, 5);
        $urut++;
        $huruf = 'SET-';
        $kode = $huruf . sprintf('%05s', $urut++);
        return $kode;
    }
    public function bynamelist()
    {
        $no = $this->uri->segment(4);
        $query = "  SELECT * 
                    FROM `project_detail_byname`
                    WHERE `project_detail_byname`.`rincian_id`=$no 
                    ORDER BY `id` DESC";
        return $this->db->query($query)->result_array();
    }

    public function hitungbyname()
    {
        $no = $this->uri->segment(4);
        $query = "  SELECT COUNT(*) as byname
                    FROM `project_detail_byname` where `project_detail_byname`.`rincian_id`=$no";
        return $this->db->query($query)->row_array();
    }

    public function buatkodebyname()
    {
        $nomor = $this->db->query("SELECT max(`kode_byname`) as kodeTerbesar FROM `project_detail_byname`")->row_array();
        $nomor1 = $nomor['kodeTerbesar'];
        $urut = (int)substr($nomor1, 4, 7);
        $urut++;
        $huruf = 'JKT-';
        $kode = $huruf . sprintf('%07s', $urut++);
        return $kode;
    }
}
