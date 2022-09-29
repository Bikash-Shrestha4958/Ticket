<?php
include_once('db_connect.php');
$connect = db_connect();
// Check if POST data exists (user submitted the form)
$id = $_POST['update_id'];
$title = $_POST['title'];
$email = $_POST['email'];
$msg =  $_POST['msg'];
$sql = "UPDATE  tickets set title='$title',email ='$email',msg ='$msg' where id =$id";
if ($connect->query($sql)) {
    echo ("<script> window.alert('Data changed successfully');
        window.location.href='index.php';</script>");
} else {
    echo ("Error description: " . $connect->error);
}

?>
