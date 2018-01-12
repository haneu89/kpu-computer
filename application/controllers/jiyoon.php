//?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*class Jiyoon extends CI_Controller {

    public function index(){
       echo "안녕하세요 박지윤입니다."."<br>";
    }
    }
?>*/

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$message_id = $_GET['message'];
echo "메시지"."<br>";
?>

<form action="post.php" method="POST">
    <input type="text" name="message">
    <button>전송</button>
</form>