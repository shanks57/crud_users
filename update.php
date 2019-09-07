<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$telpon = $_POST['telpon'];
$email = $_POST['email'];

 
mysqli_query($host,"UPDATE users SET nama='$nama', telpon='$telpon', email='$email' WHERE id='$id'");
 
header("location:index.php?pesan=update");
?>