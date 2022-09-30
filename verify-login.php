<?php
if (isset($_POST['email']) && (isset($_POST['password']))) {
    function validate($data)
    {
        $data = stripslashes($data);
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
    include_once('db_connect.php');
    $connect = db_connect();
    $sql = "select * from users where email = '$email' and password = '$password'";
    $result = $connect->query($sql);
    if($result->num_rows>0){
        session_start();
        $_SESSION['username'] = 'harry';
        echo("<script>window.alert('login successful');</script>");
        echo("<script>window.location.href='home.php';</script>");
    }
    else{
       
        echo("<script>window.alert('incorrect id/password');</script>");
        echo("<script>window.location.href='index.php';</script>");
    }
}
?>
