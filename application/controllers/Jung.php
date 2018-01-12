<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jung extends CI_Controller {
    public function message($message)
    {
        $message = $_POST['message'];
        $this->__slack($message)
    }
    
    public function index() {
        $this->load->view('yeom');
    }
    
    public function __slack($message) {
        $url = "https://hooks.slack.com/services/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";
        $data = "payload=" . json_encode(
          array(
              "channel"       =>  "#random",
              "username"      =>  "Yeom",
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
?>