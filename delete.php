<?php

// session_start();
// if (!isset($_SESSION['username'])) {
//     echo ("<script> window.alert('Not authorized');</script>");
//     echo ("<script>window.location.href='index.php';</script>");
// }
include_once('session.php');
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