<?php
function db_connect(){
$s = "localhost";
$u = "root";
$p = "";
$d= "ticket";
$connect = new mysqli($s,$u,$p,$d);
if($connect->connect_error){
    die ($connect->connect_error);
    echo("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='index.php';
    </SCRIPT>");
    
}
else{
    return $connect;
    
}
}

?>