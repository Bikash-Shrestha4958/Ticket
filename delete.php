<?php
include_once('db_connect.php');
$connect = db_connect();

if (isset($_POST['deleteData'])){
    $a = $_POST['delete_id'];
    $sql = "DELETE from tickets where id = '$a'";
    if ($connect->query($sql)) {
        echo("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Data deleted successfully');
            window.location.href='home.php';
            </SCRIPT>");
    } else {
        echo ("Error description: " . $connect->error);
    }
}
?>