<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {
    // 생성자
    function __construct() {
        parent::__construct();  // 부모에 있는 생성자를 호출

        $this->load->database();
        $this->load->model('board_model');
    }
    public function index() {
        $this->board_model->write('내요오오옹', '이름');
        echo '저장완료';
    }
}

?>