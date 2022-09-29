<?php
include_once('db_connect.php');
$connect = db_connect();
$sql = "DELETE from tickets where id = $a";
if ($connect->query($sql)) {
    echo ("<script> window.alert('Data deleted successfully');
            window.location.href='index.php';</script>");
} else {
    echo ("Error description: " . $connect->error);
}
