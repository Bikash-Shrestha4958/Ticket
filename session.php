<?php 
    class Session{
        function checkSession(){
            if(!isset($_SESSION['username'])){
                echo("<script> window.alert('Not authorized');</script>");
                echo("<script>window.location.href='index.php';</script>");
            }
        }
      
    }
?>