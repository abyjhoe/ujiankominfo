<?php
defined('BASEPATH') or exit('No direct script access allowed');
class kodebarang_model extends CI_Model
{
    public function buatkode()
    {
        $nomor = $this->db->query("SELECT max(`kode_brg`) as kodeTerbesar FROM `barang`")->row_array();
        $nomor1 = $nomor['kodeTerbesar'];
        $urut = (int)substr($nomor1, 4, 5);
        $urut++;
        $huruf = 'BRG-';
        $kode = $huruf . sprintf('%05s', $urut++);
        return $kode;
    }
}
