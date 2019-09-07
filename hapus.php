<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($host,"DELETE FROM users WHERE id='$id'")or die(mysqli_error($host));
 
header("location:index.php?pesan=hapus");
?>