<?php
    session_start();
    // Change this to your connection info.
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'reup';

    $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


    $name = $_POST['name'];
    $message = $_POST['message'];

    $sql = "INSERT INTO comments (name, message) VALUES ('$name', '$message')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo 1;
    }
    else{
        echo 0;
    }
?>