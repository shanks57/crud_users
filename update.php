<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
 
mysqli_query($host,"UPDATE note SET judul='$judul', isi='$isi' WHERE id='$id'");
 
header("location:index.php?pesan=update");
?>