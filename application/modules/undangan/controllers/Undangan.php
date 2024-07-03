<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Undangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Undangan_model'));
    }

    function index()
    {
        $data['undangan'] = $this->Undangan_model->getUndangan();
        $this->load->view('undangan', $data);
    }

    function scan($kode)
    {
        $data =  $this->Undangan_model->getUndanganByKode($kode);
        if (count($data) > 0) {
            if ($data[0]['is_hadir'] == 1) {
                echo "Sudah Konfirmasi Kehadiran";
            } else {
                $data['scan'] = $data;
                $this->load->view('result', $data);
            }
        } else {
            echo "Data Tidak Ditemukan";
        }
    }

    function konfirmasi($kode)
    {
        $data = $this->input->post('[dataArray][scan]');

        $update = $this->Undangan_model->updateData($kode, $data, 'undangan');
        if ($update) {
            $success = true;
            $result = "Data Undangan berhasil diupdate";
        } else {
            $success = false;
            $result = "Data Undangan gagal diupdate";
        }


        $response = array(
            'success' => $success,
            'messages'   => $result,
            'data' => $data
        );
        echo json_encode($response);
    }
}
