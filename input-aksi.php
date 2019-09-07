<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$telpon = $_POST['telpon'];
$email = $_POST['email'];
 
mysqli_query($host,"INSERT INTO users(nama,telpon,email) VALUES('$nama','$telpon','$email')");
header("location:index.php?pesan=input");
?>