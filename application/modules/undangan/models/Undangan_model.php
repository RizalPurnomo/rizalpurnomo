<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Undangan_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getUndangan()
    {
        $sql = "SELECT * FROM undangan";
        $qry = $this->db->query($sql);
        return $qry->result_array();
    }

    public function getUndanganByKode($kode)
    {
        $sql = "SELECT * FROM undangan WHERE kode='$kode'";
        $qry = $this->db->query($sql);
        return $qry->result_array();
    }

    public function updateData($id, $data, $tabel)
    {
        $update = $this->db->update($tabel, $data, array('kode' => $id));
        return $update;
    }
}
