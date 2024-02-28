<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    function index()
    {
        $this->load->view('profile');
    }
}

// https://www.ayongoding.com/penerapan-hmvc-pada-codeigniter/