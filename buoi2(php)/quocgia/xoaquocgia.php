<?php
    include('../connect.php');
    $id = $_GET['id'];
    $sql = "DELETE from quoc_gia where id = '$id'";
    mysqli_query($conn, $sql);
    header('location: ../index.php?page_layout=quocgia');
?>