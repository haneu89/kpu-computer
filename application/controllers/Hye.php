<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hye extends CI_Controller {
    public function index() {
        $this->__slack('꿀뽀');
        echo "안녕하십니까";
        // $this->load->view('kpu');
    }
    public function hi($name) {
        // echo "하이$name";
        // $this->load->view('common/header');
        $this->load->view('kpu', array("name" => "김진형"));
    }
    public function __slack($message) {
        $url = "https://hooks.slack.com/services/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";
        $data = "payload=" . json_encode(
          array(
              "channel"       =>  "#random",
              "username"      =>  "KPU",
              "text"          =>  $message,
          )
        );
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        curl_close($ch);
        
        return $result;
       
       }
}

?>