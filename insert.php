<?php
include_once('db_connect.php');
$connect = db_connect();
// Check if POST data exists (user submitted the form)
if (isset($_POST['title'], $_POST['msg'], $_POST['email'])){
    // Validation checks.
    if (empty($_POST['title']) || empty($_POST['msg']) || empty($_POST['email'])) {
        echo  'Please complete the form!';
    }else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo 'Please provide a valid email address!';
    } else {
        // Insert new record
    $title = $_POST['title'];
    $email = $_POST['email'];
    $msg =  $_POST['msg'];
    $sql = "INSERT INTO tickets (title, email, msg) VALUES ('$title','$email','$msg')";
    if($connect->query($sql)){
        echo("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Data inserted successfully');
        window.location.href='home.php';
        </SCRIPT>");
    }
    else{
        echo("Error description: " . $connect -> error);
    }
    // Redirect to the view ticket page
    
    }
}

?>
