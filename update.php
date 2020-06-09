<?php
include 'koneksi.php';
if (isset($_GET['kd_daftar'])) {
	$ambil = $_GET['kd_daftar'];
	$sql = mysqli_query($conn,"SELECT * FROM datasiswa WHERE kd_daftar='$ambil'");
while ($get = mysqli_fetch_array($sql)) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulir Peserta Didik</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="asset/css/form.css">
</head>
<body>

<!-- sidebar -->
<div class="sidebar">
	<a href="index.html">Beranda</a>
	<a href="#" class="active">Data Siswa</a>
	<a href="#">Data Orang Tua</a>
</div>
<!-- end sidebar -->
	<div class="card" style="margin-left: 250px;">
	<div class="card-header">
	<h2 style="text-align:center;">FORMULIR PESERTA DIDIK</h2>
	</div>
		
		<div class="card-body">	
		<form method="post" action="">
			<div class="form-group row">	
			<label for="kd_daftar" class="col-sm-2 col-form-label">Kode Daftar</label>
			<div class="col-sm-5">
			<input type="text" name="kd_daftar" class="form-control" value="<?php echo $get['kd_daftar'] ?>" >
			</div>
			</div>

			<div class="form-group row">	
			<label for="nama" class="col-sm-2 col-form-label">Nama</label>
			<div class="col-sm-5">
			<input type="text" name="nama" class="form-control" value="<?php echo $get['namasis'] ?>">
			<span class="warning"></span>
			</div>
			</div>
			

			<div class="form-group row">
			<label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
			<div class="col-sm-2">
			<select name="jk" class="form-control">
				<option value="Laki-Laki">Laki - Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>
			
			<div class="form-group row">
			<label for="nik" class="col-sm-2 col-form-label">NIK</label>
			<div class="col-sm-5">
			<input type="text" name="nik" class="form-control" value="<?php echo $get['nik'] ?>">
			<span class="warning"></span>
			</div>
			</div>
			
			<div class="form-group row">
			<label for="akta" class="col-sm-2 col-form-label">No.Reg AKTA</label>
			<div class="col-sm-5">
			<input type="text" name="akta" class="form-control" value="<?php echo $get['akta']  ?>">
			<span class="warning"></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="templahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
			<div class="col-sm-5">
			<input type="text" name="templahir" class="form-control" value="<?php echo $get['temlahir'] ?>">
			<span class="warning"></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="tglahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
			<div class="col-sm-5">
			<input type="date" name="tglahir" class="form-control" value="<?php echo $get['tglahir'] ?>">
			<span class="warning"></span>
			</div>
			</div>


			<div class="form-group row">
			<label for="agama" class="col-sm-2 col-form-label">Agama</label></td>
			<div class="col-sm-2">
			<select name="agama" class="form-control">
				<option value="Islam">Islam</option>
				<option value="Kristen">Kristen</option>
				<option value="Katholik">Katholik</option>
				<option value="Hindu">Hindu</option>
				<option value="Budha">Budha</option>
				<option value="Kong Hu Chu">Kong Hu Chu</option>
			</select>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>


			<div class="form-group row">
			<label for="kwn" class="col-sm-2 col-form-label">Kewarganegaraan</label>
			<div class="col-sm-5">
			<input type="text" name="kwn" class="form-control" value="<?php echo $get['kwn']; ?>">
			</div>
			</div>

			
			<div class="form-group row">
			<label for="bk" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
			<div class="col-sm-2">
			<select name="bk" class="form-control">
				<option value="Ya">Ya</option>
				<option value="Tidak">Tidak</option>
			</select>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>

			<div class="form-group row">
			<label for="alamat" class="col-sm-2 col-form-label">Alamat Jalan</label>
			<div class="col-sm-5">
			<input type="text" name="alamat" class="form-control" value="<?php echo $get['alamat']; ?>">
			<span class="warning"></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="rt" class="col-sm-2 col-form-label">RT</label>
			<div class="col-sm-5">
			<input type="text" name="rt" class="form-control" value="<?php echo $get['rt']; ?>">
			<span class="warning"></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="rw" class="col-sm-2 col-form-label">RW</label>
			<div class="col-sm-5">
			<input type="text" name="rw" class="form-control" value="<?php echo $get['rw']; ?>">
			<span class="warning"></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="dusun" class="col-sm-2 col-form-label">Dusun</label>
			<div class="col-sm-5">
			<input type="text" name="dusun" class="form-control" value="<?php echo $get['dusun']; ?>">
			<span class="warning"></span>
			</div>	
			</div>

			<div class="form-group row">
			<label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
			<div class="col-sm-5">
			<input type="text" name="kelurahan" class="form-control" value="<?php echo $get['kelurahan']; ?>">
			<span class="warning"></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
			<div class="col-sm-5">
			<input type="text" name="kecamatan" class="form-control" value="<?php echo $get['kecamatan']; ?>">
			<span class="warning"></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="kodepos" class="col-sm-2 col-form-label">Kodepos</label>
			<div class="col-sm-5">
			<input type="text" name="kodepos" class="form-control" value="<?php echo $get['kodepos']; ?>">
			<span class="warning"></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="tinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
			<div class="col-sm-3">
			<select name="tinggal" class="form-control">
				<option value="Ortu">Bersama Orang Tua</option>
				<option value="Kos">Kos</option>
				<option value="Kontrak">Kontrak</option>
				<option value="Rusun">Rusun</option>
			</select>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>

			<div class="form-group row">
			<label for="transport" class="col-sm-2 col-form-label">Moda Transportasi</label>
			<div class="col-sm-2">
			<select name="transport" class="form-control">
				<option value="Motor">Sepeda Motor</option>
				<option value="Mobil">Mobil</option>
				<option value="Jalan">Jalan Kaki</option>
				<option value="Umum">Kendaraan Umum</option>
				<option value="Ojol">Ojek/Taxi Online</option>
			</select>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>

			<div class="form-group row">
			<label for="anak" class="col-sm-2 col-form-label">Anak Ke</label>
			<div class="col-sm-5">
			<input type="text" name="anak" class="form-control" value="<?php echo $get['anak']; ?>">
			<span class="warning"></span>
			</div>
			</div>

			<div class="form-group row">	
			<label for="kps" class="col-sm-2 col-form-label">Penerima KPS/KKS</label>
			<div class="col-sm-2">
			<select name="kps" class="form-control">
				<option value="Ya">Ya</option>
				<option value="Tidak">Tidak</option>
			</select>
			<span class="warning">Periksa Kembali</span>
			</div>
			</div>

			<div class="form-group row">
			<label for="nokps" class="col-sm-2 col-form-label">No. KPS/KKS</label>
			<div class="col-sm-5">
			<input type="text" name="nokps" class="form-control" value="<?php echo $get['nokps']; ?>">
			<span class="warning"></span>
			</div>
			</div>

			<div class="form-group row">
			<div class="col-sm-5"><center>	
			<button type="submit" class="btn btn-primary" name="oke">INPUT</button>
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
if (isset($_POST['oke'])) {
$kodeDaftar = $_POST['kd_daftar'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$nik = $_POST['nik'];
$akta = $_POST['akta'];
$templahir = $_POST['templahir'];
$tglahir = $_POST['tglahir'];
$agama = $_POST['agama'];
$kwn = $_POST['kwn'];
$bk = $_POST['bk'];
$alamat = $_POST['alamat'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$dusun = $_POST['dusun'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kodepos = $_POST['kodepos'];
$tinggal = $_POST['tinggal'];
$transport = $_POST['transport'];
$anak = $_POST['anak'];
$kps = $_POST['kps'];
$nokps = $_POST['nokps'];
$sql=mysqli_query($conn,"UPDATE datasiswa SET namasis='$nama',jkel='$jk' ,nik='$nik' ,temlahir='$templahir' ,tglahir='$tglahir' ,akta='$akta' ,agama='$agama' ,kwn='$kwn' ,berkebut='$bk' ,alamat='$alamat' ,rt='$rt',rw='$rw' ,dusun='$dusun' ,kelurahan='$kelurahan' ,kecamatan='$kecamatan' ,kodepos='$kodepos' ,tinggal='$tinggal' ,transport='$transport' ,anak='$anak' ,kps='$kps',nokps='$nokps' WHERE kd_daftar='$kodeDaftar'");
if ($sql) {
echo "<script>window.location='updateortu.php?kd_daftar=$kodeDaftar'</script>";
}else{
echo "<script>window.alert('Maaf Salah')</script>";
}
}
ob_end_flush();
?>