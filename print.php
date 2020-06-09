<?php
include 'koneksi.php';
if (isset($_GET['kd_daftar'])) {
$ambil = $_GET['kd_daftar'];
	$sql = mysqli_query($conn,"SELECT s.*, o.*,u.namadiri FROM datasiswa s JOIN dataortu o ON s.kd_daftar=o.kd_daftar JOIN upload u ON o.kd_daftar=u.kd_daftar WHERE s.kd_daftar = '$ambil'");
while ($get = mysqli_fetch_object($sql)) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cetak</title>
	<meta http-equiv="refresh" content="6">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta http-equiv="refresh" content="5; url=index.html">
</head>
<body>
	<header style="background-color: #bbb; height: 100px; padding: 5px 5px;">
		<div style="display: flex;float: right;margin-right: 40px;"><img src="asset/image/limas0-940x356.jpg" width="90px"></div>
<div style="float: center;">
	<ul>
		<ol>
			<h2 align="center">KARTU BUKTI PENDAFTARAN</h2>
		</ol>
		<ol>
			<h3 align="center">SD Muhammadiyah 5 Surabaya</h3>
		</ol>
	</ul>
</div>
	
</header>
<div class="card" style="width: 100%;
  min-height: 100vh;
  background-image: url(asset/image/2.png);
  justify-content: center;
  flex-wrap: wrap;
  padding: 33px 30px;">
			<table align="center" style="font-size: 24px;" class="table table-borderless col-md-6">
        <tr align="center">
            <td colspan="2">
            <img src="gambar/<?php echo $get->namadiri ?>" width="200"/>
        	</td>
        </tr>
        <tr>
			<td>Kode Pendaftaran</td>

			<td><?php echo $get->kd_daftar ?></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>

			<td><?php echo $get->namasis ?></td>
			</tr>
		<tr>
		<td>Jenis Kelamin</td>
		<td><?php echo $get->jkel ?></td>
		</tr>
		<tr>	
			<td>Tempat Lahir</td>

			<td><?php echo $get->temlahir ?></td>
			</tr>
				<tr>
				<td>Tanggal Lahir</td>
	
				<td><?php echo $get->tglahir ?></td>
				</tr>
</table>
</div>
</body>
</html>
<?php
}}
echo "<script>window.print()</script>";
?>