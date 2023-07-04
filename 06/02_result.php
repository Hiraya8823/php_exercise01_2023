<?php 

$msg = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $msg = $_POST['message'];
}

echo '私の名前は、' . htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') . 'です。';
