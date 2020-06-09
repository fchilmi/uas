<?php
if (isset($_GET['pesan'])) {
	if ($_GET['pesan']=="login") {
	echo "<script>window.alert('Selamat Datang')</script>";
	}
}else{
	echo "<script>window.alert('Maaf Salah')</script>";
	header("location:admin.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADMIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="asset/css/main.css">
	<link rel="stylesheet" type="text/css" href="asset/css/form.css">
<!--===============================================================================================-->
</head>
<body>

<div class="limiter">
<div class="container-table100">
	<div><button><a href="index.html"><img src="https://img.icons8.com/flat_round/64/000000/home--v1.png"/></a></button></div>
<div class="wrap-table100">
<div class="table100">
	<table>
			<thead>
				<tr class="table100-head">
					<th class="column1">Kode Daftar</th>
					<th class="column2">Jenis Kelamin</th>
					<th class="column3">Nama Siswa</th>
					<th class="column4">Tanggal Lahir</th>
					<th class="column5">Nama Ayah</th>
					<th class="column6">Nama Ibu</th>
					<th class="column7">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include 'koneksi.php';
				$sql = mysqli_query($conn,"SELECT s.kd_daftar,s.jkel,s.namasis,s.tglahir,o.namaayah,o.namaibu FROM datasiswa s JOIN dataortu o ON s.kd_daftar=o.kd_daftar");
				$nomor = 1;
				while ($data = mysqli_fetch_array($sql)) {
				echo "
					<tr>
						<td>". $data['kd_daftar'] ."</td>
						<td>". $data['jkel'] ."</td>
						<td>". $data['namasis'] ."</td>
						<td>". $data['tglahir'] ."</td>
						<td>". $data['namaayah'] ."</td>
						<td>". $data['namaibu'] ."</td>
						<td>
							<a href='update.php?kd_daftar=$data[kd_daftar]'>Edit</a>
							&nbsp
							<a href='delete.php?kd_daftar=$data[kd_daftar]'>Hapus</a>
							<br>
							<a href='detailadmin.php?kd_daftar=$data[kd_daftar]'>Detail</a>
						</td>
					</tr>";
				$nomor++;
			}
				?>	
			</tbody>
	</table>
</div>
</div>
</div>
</div>


	

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>