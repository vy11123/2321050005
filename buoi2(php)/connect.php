<?php
    $servername = "localhost";
    $username = "root";
    $password = "30122005";
    //$port = 3306 vì là 3306 nên không cần để nếu khác thì cần có
    $database = "quan_ly_phim";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
?>