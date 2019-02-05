<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
         $this->load->view('common/head');
         $this->load->view('parallax');

         $this->load->view('profil');

         $this->load->view('common/link');

         $this->load->view('projets');

         $this->load->view('common/footer');
    }
}
