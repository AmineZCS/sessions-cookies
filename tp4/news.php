<?php 
session_start();
if (!isset($_SESSION['user'],$_SESSION['pass'])) {

    header('refresh: 2; url=index.php');
    echo '<h2 style="color: red;">Login First!</h2>';


    }else{
        if (isset($_POST['logout'])) 
    {   
        echo '<h2 style="color: red;">Logging Out...</h2>';
        session_unset();
        session_destroy();
        // header('Location: http://www.example.com/');
        header("refresh: 2; url=index.php");
    }else {
        include("i2.html");
    }
    }
?>
