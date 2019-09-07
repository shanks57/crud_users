<html>

	<head>
		<title>CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">

	</head>

	<body>

		<div class="container text-center p-5 bg-light my-5">
			<a class="btn btn-outline-info" href="index.php">Lihat Semua Data</a>
			<h3 class="my-4">Input data baru</h3>
			<form class="" action="input-aksi.php" method="post">

				<td>Nama</td>
				<td><input class="form-control w-50 mx-auto" type="text" name="nama"></td>

				<td>Telpon</td>
				<td><input class="form-control w-50 mx-auto" type="text" name="telpon"></td>

				<td>Email</td>
				<td><input class="form-control w-50 mx-auto" type="text" name="email"></td>


				<input class="my-4 btn btn-outline-warning" type="submit" value="Simpan">

			</form>
		</div>

	</body>

</html>