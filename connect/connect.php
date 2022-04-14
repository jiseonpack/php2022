<?php
    $host = "localhost";
    $user = "jsjh4422";
    $pass = "choi800912!!";
    $db = "jsjh4422";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");
    
    if(mysqli_connect_errno()){
        echo "DATABASE Connect Flase";
    } else {
        // echo "DATABASE Connect True";
    }
?>