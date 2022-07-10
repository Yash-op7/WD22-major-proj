<?php
    session_start();

    $dbhost = "localhost";
    $database = "movies_temp";
    $dbuser = "root";
    $dbpwd="";

    $conn = mysqli_connect($dbhost,$dbuser,$dbpwd,$database);

    if(!$conn){
        echo "Databse connection error: " . mysqli_connect_error();
    }
?>