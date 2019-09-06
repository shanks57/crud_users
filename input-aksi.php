<?php 
include 'koneksi.php';
$judul = $_POST['judul'];
$isi = $_POST['isi'];
 
mysqli_query($host,"INSERT INTO note(judul,isi) VALUES('$judul','$isi')");
header("location:index.php?pesan=input");
?>