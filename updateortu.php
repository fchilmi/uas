<?php
session_start();
include 'koneksi.php';
if (isset($_GET['kd_daftar'])) {
$ambil = $_GET['kd_daftar'];
	$sql = mysqli_query($conn,"SELECT * FROM dataortu WHERE kd_daftar='$ambil'");
while ($get = mysqli_fetch_array($sql)) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulir Peserta Didik</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="asset/css/form.css">
</head>
<body>
<!-- sidebar -->
<div class="sidebar">
	<a href="#">Beranda</a>
	<a href="#">Data Siswa</a>
	<a href="#" class="active">Data Orang Tua</a>
</div>
<!-- end sidebar -->
	<div class="card" style="margin-left: 250px;">
	<div class="card-header">
	<h2 style="text-align:center;">FORMULIR PESERTA DIDIK</h2><br>
	</div>
		
		<div class="card-body">	
		<form method="post" action="">
			<div class="form-group row">	
			<label for="kd_daftar" class="col-sm-2 col-form-label">Kode Daftar</label>
			<div class="col-sm-5">
			<input type="text" name="kd_daftar" class="form-control" value="<?php echo $ambil ?>" >
			</div>
			</div>

			<h3 style="color: blue;">Data Ayah</h3>
			<div class="form-group row">	
			<label for="nama" class="col-sm-2 col-form-label">Nama Ayah</label>
			<div class="col-sm-5">
			<input type="text" name="nama" class="form-control" value="<?php echo $get['namaayah']; ?>">
			<span class="warning"></span>
			</div>
			</div>
			
			<div class="form-group row">
			<label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
			<div class="col-sm-2">
			<select name="pendidikan" class="form-control">
				<option value="Tidak Sekolah">Tidak Sekolah</option>
				<option value="SD">SD/MI</option>
				<option value="SMP">SMP/MTs</option>
				<option value="SMA">SMA/SMK/MA</option>
				<option value="Diploma">Diploma</option>
				<option value="S1">S1</option>
				<option value="S2">S2</option>
				<option value="S3">S3</option>
			</select>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>
			
			<div class="form-group row">
			<label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
			<div class="col-sm-2">
			<select name="pekerjaan" class="form-control">
				<option value="Tidak Bekerja">Tidak Bekerja</option>
				<option value="wiraswasta">Wiraswasta</option>
				<option value="Buruh">Buruh</option>
				<option value="Petani">Petani</option>
				<option value="Peternak">Peternak</option>
				<option value="Nelayan">Nelayan</option>
				<option value="PNS">PNS</option>
				<option value="TNI/POLISI">TNI/POLISI</option>
				<option value="Lain-Lain">Lain-Lain</option>
			</select>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>
			
			<div class="form-group row">
			<label for="penghasilan" class="col-sm-2 col-form-label">Penghasilan</label>
			<div class="col-sm-2">
			<select name="penghasilan" class="form-control">
				<option value="0-500.000">0-500.000</option>
				<option value="500.0000-1.000.000">500.0000-1.000.000</option>
				<option value="1.000.000-5.000.000">1.000.000-5.000.000</option>
				<option value="5.000.000-10.000.000">5.000.000-10.000.000</option>
				<option value="10.000.000 Keatas">10.000.000 Keatas</option>
			</select>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>

			<div class="form-group row">
			<label for="alamat" class="col-sm-2 col-form-label">Alamat Jalan</label>
			<div class="col-sm-5">
			<input type="text" name="alamat" class="form-control" value="<?php echo $get['alamatayah']; ?>">
			<span class="warning"></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="nohp" class="col-sm-2 col-form-label">No. Telp/HP</label>
			<div class="col-sm-5">
			<input type="text" name="nohp" class="form-control" value="<?php echo $get['nohpayah']; ?>">
			<span class="warning"></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="status" class="col-sm-2 col-form-label">Status</label>
			<div class="col-sm-3">
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" value="Masih Hidup" name="status">
			<label class="form-check-label" for="status">Masih Hidup</label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="status" value="Meninggal">
			<label class="form-check-label" for="status">Meninggal</label>
			</div>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>

<!-- END DATA AYAH -->

<!-- data ibu -->
			<h3 style="color: blue;">Data Ibu</h3>
			<div class="form-group row">	
			<label for="nama" class="col-sm-2 col-form-label">Nama Ibu</label>
			<div class="col-sm-5">
			<input type="text" name="namaibu" class="form-control" value="<?php echo $get['namaibu']; ?>">
			</div>
			</div>
			

			<div class="form-group row">
			<label for="pendidikanibu" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
			<div class="col-sm-2">
			<select name="pendidikanibu" class="form-control">
				<option value="Tidak Sekolah">Tidak Sekolah</option>
				<option value="SD">SD/MI</option>
				<option value="SMP">SMP/MTs</option>
				<option value="SMA">SMA/SMK/MA</option>
				<option value="Diploma">Diploma</option>
				<option value="S1">S1</option>
				<option value="S2">S2</option>
				<option value="S3">S3</option>
			</select>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>
			
			<div class="form-group row">
			<label for="pekerjaanibu" class="col-sm-2 col-form-label">Pekerjaan</label>
			<div class="col-sm-2">
			<select name="pekerjaanibu" class="form-control">
				<option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
				<option value="wiraswasta">Wiraswasta</option>
				<option value="Buruh">Buruh</option>
				<option value="Petani">Petani</option>
				<option value="Peternak">Peternak</option>
				<option value="Nelayan">Nelayan</option>
				<option value="PNS">PNS</option>
				<option value="TNI/POLISI">TNI/POLISI</option>
				<option value="Lain-Lain">Lain-Lain</option>
			</select>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>
			
			<div class="form-group row">
			<label for="penghasilanibu" class="col-sm-2 col-form-label">Penghasilan</label>
			<div class="col-sm-2">
			<select name="penghasilanibu" class="form-control">
				<option value="0-500.000">0-500.000</option>
				<option value="500.0000-1.000.000">500.0000-1.000.000</option>
				<option value="1.000.000-5.000.000">1.000.000-5.000.000</option>
				<option value="5.000.000-10.000.000">5.000.000-10.000.000</option>
				<option value="10.000.000 Keatas">10.000.000 Keatas</option>
			</select>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>

			<div class="form-group row">
			<label for="alamatibu" class="col-sm-2 col-form-label">Alamat Jalan</label>
			<div class="col-sm-5">
			<input type="text" name="alamatibu" class="form-control" value="<?php echo $get['alamatibu']; ?>">
			</div>
			</div>

			<div class="form-group row">
			<label for="nohpibu" class="col-sm-2 col-form-label">No. Telp/HP</label>
			<div class="col-sm-5">
			<input type="text" name="nohpibu" class="form-control" value="<?php echo $get['nohpibu']; ?>">
			</div>
			</div>

			<div class="form-group row">
			<label for="statusibu" class="col-sm-2 col-form-label">Status</label>
			<div class="col-sm-3">
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="statusibu" id="statusibu" value="Masih Hidup">
			<label class="form-check-label" for="statusibu">Masih Hidup</label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="statusibu" id="statusibu" value="Meninggal">
			<label class="form-check-label" for="status">Meninggal</label>
			</div>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>

<!-- END DATA IBU -->

<!-- DATA WALI -->
			<h3 style="color: blue;">Data Wali</h3>
			<div class="form-group row">	
			<label for="namawali" class="col-sm-2 col-form-label">Nama Wali</label>
			<div class="col-sm-5">
			<input type="text" name="namawali" class="form-control" value="<?php echo $get['namawali']; ?>">
			</div>
			</div>
			
			<div class="form-group row">
			<label for="pendidikanwali" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
			<div class="col-sm-2">
			<select name="pendidikanwali" class="form-control">
				<option value="Tidak Sekolah">Tidak Sekolah</option>
				<option value="SD">SD/MI</option>
				<option value="SMP">SMP/MTs</option>
				<option value="SMA">SMA/SMK/MA</option>
				<option value="Diploma">Diploma</option>
				<option value="S1">S1</option>
				<option value="S2">S2</option>
				<option value="S3">S3</option>
			</select>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>
			
			<div class="form-group row">
			<label for="pekerjaanwali" class="col-sm-2 col-form-label">Pekerjaan</label>
			<div class="col-sm-2">
			<select name="pekerjaanwali" class="form-control">
				<option value="Tidak Bekerja">Tidak Bekerja</option>
				<option value="wiraswasta">Wiraswasta</option>
				<option value="Buruh">Buruh</option>
				<option value="Petani">Petani</option>
				<option value="Peternak">Peternak</option>
				<option value="Nelayan">Nelayan</option>
				<option value="PNS">PNS</option>
				<option value="TNI/POLISI">TNI/POLISI</option>
				<option value="Lain-Lain">Lain-Lain</option>
			</select>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>
			
			<div class="form-group row">
			<label for="penghasilanwali" class="col-sm-2 col-form-label">Penghasilan</label>
			<div class="col-sm-2">
			<select name="penghasilanwali" class="form-control">
				<option value="0-500.000">0-500.000</option>
				<option value="500.0000-1.000.000">500.0000-1.000.000</option>
				<option value="1.000.000-5.000.000">1.000.000-5.000.000</option>
				<option value="5.000.000-10.000.000">5.000.000-10.000.000</option>
				<option value="10.000.000 Keatas">10.000.000 Keatas</option>
			</select>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>

			<div class="form-group row">
			<label for="alamatwali" class="col-sm-2 col-form-label">Alamat Jalan</label>
			<div class="col-sm-5">
			<input type="text" name="alamatwali" class="form-control" value="<?php echo $get['alamatwali']; ?>">
			</div>
			</div>

			<div class="form-group row">
			<label for="nohpwali" class="col-sm-2 col-form-label">No. Telp/HP</label>
			<div class="col-sm-5">
			<input type="text" name="nohpwali" class="form-control" value="<?php echo $get['nohpwali']; ?>">
			</div>
			</div>
<!-- END DATA WALI -->
			<div class="form-group row">
			<div class="col-sm-5"><center>	
			<button type="submit" name="siap" class="btn btn-primary">INPUT</button>
			</center>
			</div>
			</div>
			<?php
		};
	}
			?>
		</form>
		</div>	
</div>
</body>
</html>
<?php
ob_start();
include 'koneksi.php';
if (isset($_POST['siap'])) {
$kodeDaftar = $_POST['kd_daftar'];
$nama = $_POST['nama'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$penghasilan = $_POST['penghasilan'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$namaibu = $_POST['namaibu'];
$pendidikanibu = $_POST['pendidikanibu'];
$pekerjaanibu = $_POST['pekerjaanibu'];
$penghasilanibu = $_POST['penghasilanibu'];
$nohpibu = $_POST['nohpibu'];
$alamatibu = $_POST['alamatibu'];
$statusibu = $_POST['statusibu'];
$namawali = $_POST['namawali'];
$pendidikanwali = $_POST['pendidikanwali'];
$pekerjaanwali = $_POST['pekerjaanwali'];
$penghasilanwali = $_POST['penghasilanwali'];
$nohpwali = $_POST['nohpwali'];
$alamatwali = $_POST['alamatwali'];

$sql=mysqli_query($conn,"UPDATE dataortu SET namaayah='$nama',pendidikanayah='$pendidikan',pekerjaanayah='$pekerjaan',penghasilanayah='$penghasilan',alamatayah='$alamat',nohpayah='$nohp',statusayah='$status',namaibu='$namaibu',pendidikanibu='$pendidikanibu',pekerjaanibu='$pekerjaanibu',penghasilanibu='$penghasilanibu',alamatibu='$alamatibu',nohpibu='$nohpibu',statusibu='$statusibu',namawali='$namawali',pendidikanwali='$pendidikanwali',pekerjaanwali='$pekerjaanwali',penghasilanwali='$penghasilanwali',alamatwali='$alamatwali',nohpwali='$nohpwali' WHERE kd_daftar='$kodeDaftar'");
if ($sql) {
	echo "<script>window.alert('Berhasil')</script>";
	echo "<script>window.location='select.php?pesan=login'</script>";
}else{
	echo "<script>window.alert('Maaf Salah')</script>";
}
}
ob_end_flush();
?>