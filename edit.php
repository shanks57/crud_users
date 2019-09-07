<!DOCTYPE html>
<html>

	<head>
		<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">

	</head>

	<body>




		<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($host,"SELECT * FROM users WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>

		<div class="container text-center p-5 bg-light my-5">
			<a class="btn btn-outline-info" href="index.php">Lihat Semua Data</a>
			<h3 class="my-4">Input data baru</h3>
			<form class="" action="update.php" method="post">
				<input type="hidden" name="id" value="<?php echo $data['id'] ?>">

				<td>Nama</td>
				<td><input class="form-control w-50 mx-auto" value="<?php echo $data['nama'] ?>" type="text"
						name="nama"></td>

				<td>Telpon</td>
				<td><input class="form-control w-50 mx-auto" value="<?php echo $data['telpon'] ?>" type="text"
						name="telpon"></td>

				<td>Email</td>
				<td><input class="form-control w-50 mx-auto" value="<?php echo $data['email'] ?>" type="text"
						name="email"></td>


				<input class="my-4 btn btn-outline-warning" type="submit" value="Simpan">

			</form>
		</div>

		<?php } ?>
	</body>

</html>