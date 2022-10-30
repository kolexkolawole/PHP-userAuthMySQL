<?php


function db() {
    //set your configs here
    $host = "localhost";
    $user = "root";
    $db = "zuriphp";
    $password = "";
    $conn = mysqli_connect($host, $user, $password, $db);
    $conn = mysqli_connect($host, $user, $password);
if(!$conn->connect_error){
    die("database connection failed: " . $conn->connect_error);
}
    echo "Connected to database successfully";
    return $conn;
}

?>