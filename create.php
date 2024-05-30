<?php
include 'koneksi.php';

$id_transaksi = $_POST['id_transaksi'];
$id_barang = $_POST['id_barang'];
$tanggal = $_POST['tanggal'];
$total = $_POST['total'];


$sql = mysqli_query($koneksi, "INSERT INTO transaksi (id_barang, tanggal, total) VALUES ('$id_barang', '$tanggal', '$total')");

header("Location:index.php?pesan=input");
?>
