<?php 
include '../koneksi.php';
$harga = $_POST['harga'];
mysqli_query($conn, "update harga set harga_perkilo = '$harga'");
header("location:harga.php");
?>