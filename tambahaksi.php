<?php
include 'koneksi.php';

$ID = $_POST['ID'];
$judul = $_POST['judul'];
$genre = $_POST['genre'];
$quantity = $_POST['quantity'];

mysqli_query( $koneksi, "insert into buku values('$ID','$judul','$genre','$quantity')");

header("locatian: admin.php");


?>