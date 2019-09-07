<!DOCTYPE html>
<html>

	<head>
		<title>CRUD</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">

	</head>

	<body>
		<div class="container">

			<br />

			<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
			<br />
			<a class="btn btn-success" href="input.php">+ Tambah Data Baru</a>

			<table class="table my-4">
				<thead>
					<tr>
						<th scope="col">Nama</th>
						<th scope="col">Nomor Telepon</th>
						<th scope="col">E-mail</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($host,"SELECT * FROM users")or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
				<tbody>
					<tr>
						<td scope="row"><?php echo $data['nama']; ?></td>
						<td scope="row"><?php echo $data['telpon']; ?></td>
						<td scope="row"><?php echo $data['email']; ?></td>

						<td scope="row">
							<a class="btn btn-warning" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
							<a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</body>

</html>