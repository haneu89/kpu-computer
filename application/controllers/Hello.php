<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
    public function index() {
        echo "안녕하십니까";
        // $this->load->view('kpu');
    }
    public function hi($name) {
        // echo "하이$name";
        // $this->load->view('common/header');
        $this->load->view('kpu', array("name" => "김진형"));
    }
}

?>