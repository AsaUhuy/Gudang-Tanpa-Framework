<?php
    require "koneksi.php";
    $id = $_GET['id'];

    $query = mysqli_query($conn, "DELETE FROM tbbarang WHERE id = $id");
    header('location:index.php?av=databarang');
?>