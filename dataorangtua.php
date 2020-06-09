<!DOCTYPE html>
<html>
<head>
	<title>Formulir Peserta Didik</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="asset/css/form.css">
</head>
<body>

<?php
$error_nama = "";
$error_pendidikan = "";
$error_pekerjaan = "";
$error_penghasilan = "";
$error_nohp = "";
$error_alamat = "";
$error_status = "";
$error_namaibu = "";
$error_pendidikanibu = "";
$error_pekerjaanibu = "";
$error_penghasilanibu = "";
$error_nohpibu = "";
$error_alamatibu = "";
$error_statusibu = "";
$error_namawali = "";
$error_pendidikanwali = "";
$error_pekerjaanwali = "";
$error_penghasilanwali = "";
$error_nohpwali = "";
$error_alamatwali = "";

$kodeDaftar = "";
$nama = "";
$pendidikan = "";
$pekerjaan = "";
$penghasilan = "";
$nohp = "";
$alamat = "";
$status = "";
$namaibu = "";
$pendidikanibu = "";
$pekerjaanibu = "";
$penghasilanibu = "";
$nohpibu = "";
$alamatibu = "";
$statusibu = "";
$namawali = "";
$pendidikanwali = "";
$pekerjaanwali = "";
$penghasilanwali = "";
$nohpwali = "";
$alamatwali = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["nama"]))
{
	$error_nama = "Nama tidak boleh kosong";
} 
else
{
	$nama = cek_input($_POST["nama"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$nama))
	{
		$error_nama = "Inputan Hanya boleh huruf dan spasi";
	}	
}
		if (empty($_POST["pendidikan"]))
		{
			$error_pendidikan = "Pendidikan tidak boleh kosong";
		} 
		else
		{
			$pendidikan = cek_input($_POST["pendidikan"]);
		}

if (empty($_POST["pekerjaan"]))
{
	$error_pekerjaan = "pekerjaan tidak boleh kosong";
} 
else
{
	$pekerjaan = cek_input($_POST["pekerjaan"]);
}

		if (empty($_POST["penghasilan"]))
		{
			$error_penghasilan = "penghasilan tidak boleh kosong";
		} 
		else
		{
			$penghasilan = cek_input($_POST["penghasilan"]);
		}	
if 	(empty($_POST["alamat"]))
{
	$error_alamat = "Alamat Jalan tidak boleh kosong";
}
else{
	$alamat=cek_input($_POST["alamat"]);
if (!preg_match("/^[a-z A-z0-9+&@#\/%?=~_|!:,.;]*$/", $_POST["alamat"])) {
		$error_alamat = "Alamat hanya boleh huruf dan angka";
	}else{
		$alamat=cek_input($_POST["alamat"]);
	}
}
		if (empty($_POST["nohp"])) {
		$error_nohp = "Tidak boleh kosong";
		}else{
			if (!is_numeric($_POST["nohp"])) {
				$error_nohp = "hanya boleh angka";
			}else{
				$nohp=cek_input($_POST["nohp"]);
			}
		}
if (empty($_POST["status"])) {
	$error_status = "status tidak boleh kosong";
}else{
	$status=cek_input($_POST["status"]);
}
/*END CEK DATA AYAH*/

/*CEK DATA IBU*/

		if (empty($_POST["namaibu"]))
		{
			$error_namaibu = "Nama ibu tidak boleh kosong";
		} 
		else
		{
			$namaibu = cek_input($_POST["namaibu"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$namaibu))
			{
				$error_namaibu = "Inputan Hanya boleh huruf dan spasi";
			}	
		}
if (empty($_POST["pendidikanibu"]))
{
	$error_pendidikanibu = "Pendidikan Ibu tidak boleh kosong";
} 
else
{
	$pendidikanibu = cek_input($_POST["pendidikanibu"]);
}

		if (empty($_POST["pekerjaanibu"]))
		{
			$error_pekerjaanibu = "pekerjaan ibu tidak boleh kosong";
		} 
		else
		{
			$pekerjaanibu = cek_input($_POST["pekerjaanibu"]);
		}

if (empty($_POST["penghasilanibu"]))
{
	$error_penghasilanibu = "penghasilan tidak boleh kosong";
} 
else
{
	$penghasilanibu = cek_input($_POST["penghasilanibu"]);
}	
		if 	(empty($_POST["alamatibu"]))
		{
			$error_alamatibu = "Alamat Jalan tidak boleh kosong";
		}
		else{
			$alamatibu=cek_input($_POST["alamatibu"]);
			if (!preg_match("/^[a-z A-z0-9+&@#\/%?=~_|!:,.;]*$/", $_POST["alamatibu"])) {
				$error_alamatibu = "Alamat hanya boleh huruf dan angka";
				}else{
				$alamatibu=cek_input($_POST["alamatibu"]);
				}
			}
if (empty($_POST["nohpibu"])) {
$error_nohpibu = "Tidak boleh kosong";
}else{
	if (!is_numeric($_POST["nohpibu"])) {
		$error_nohpibu = "hanya boleh angka";
	}else{
		$nohpibu=cek_input($_POST["nohpibu"]);
	}
}
		if (empty($_POST["statusibu"])) {
			$error_statusibu = "status tidak boleh kosong";
		}else{
			$statusibu=cek_input($_POST["statusibu"]);
		}
/*END CEK DATA IBU*/

/*CEK DATA WALI*/
if ($_POST["namawali"]) {
	$namawali = cek_input($_POST["namawali"]);
	}
		if ($_POST["pendidikanwali"])
		{
			$pendidikanwali = cek_input($_POST["pendidikanwali"]);
		}

if ($_POST["pekerjaanwali"]){
	$pekerjaanwali = cek_input($_POST["pekerjaanwali"]);
}

		if ($_POST["penghasilanwali"])
		{
			$penghasilanwali = cek_input($_POST["penghasilanwali"]);
		} 
if 	($_POST["alamatwali"])
{
	$alamatwali=cek_input($_POST["alamatwali"]);
}
		if ($_POST["nohpwali"]) {
			$nohpwali=cek_input($_POST["nohpwali"]);
		}
/*END CEK DATA WALI*/
}


function cek_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<!-- sidebar -->
<!--<div class="sidebar">
	<a href="#">Beranda</a>
	<a href="#">Data Siswa</a>
	<a href="" class="active">Data Orang Tua</a>
	<a href="#">Foto</a>
</div>-->
<!-- end sidebar -->
	<div class="card" style="margin-left: 250px;">
	<div class="card-header">
	<h2 style="text-align:center;">FORMULIR PESERTA DIDIK</h2><br>
	</div>
		
		<div class="card-body">	
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<h3 style="color: blue;">Data Ayah</h3>
			<div class="form-group row">	
			<label for="nama" class="col-sm-2 col-form-label">Nama Ayah</label>
			<div class="col-sm-5">
			<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama Ayah" value="<?php echo $nama; ?>">
			<span class="warning"><?php echo $error_nama; ?></span>
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
			</div>
			</div>

			<div class="form-group row">
			<label for="alamat" class="col-sm-2 col-form-label">Alamat Jalan</label>
			<div class="col-sm-5">
			<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>">
			<span class="warning"><?php echo $error_alamat; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="nohp" class="col-sm-2 col-form-label">No. Telp/HP</label>
			<div class="col-sm-5">
			<input type="text" name="nohp" class="form-control <?php echo ($error_nohp !="" ? "is-invalid" : ""); ?>" id="nohp" placeholder="Masukkan Angka Saja" value="<?php echo $nohp; ?>">
			<span class="warning"><?php echo $error_nohp; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="status" class="col-sm-2 col-form-label">Status</label>
			<div class="col-sm-3">
			<div class="form-check form-check-inline">
			<input class="form-check-input <?php if(isset($status) && $status=="Masih Hidup") echo("checked");?>" type="radio" name="status" id="status" value="Masih Hidup">
			<label class="form-check-label" for="status">Masih Hidup</label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input <?php if(isset($status) && $status=="Meninggal") echo("checked");?>" type="radio" name="status" id="status" value="Meninggal">
			<label class="form-check-label" for="status">Meninggal</label>
			</div>
			</div>
			</div>

<!-- END DATA AYAH -->

<!-- data ibu -->
			<h3 style="color: blue;">Data Ibu</h3>
			<div class="form-group row">	
			<label for="nama" class="col-sm-2 col-form-label">Nama Ibu</label>
			<div class="col-sm-5">
			<input type="text" name="namaibu" class="form-control <?php echo ($error_namaibu !="" ? "is-invalid" : ""); ?>" id="namaibu" placeholder="Nama Ibu" value="<?php echo $namaibu; ?>">
			<span class="warning"><?php echo $error_namaibu; ?></span>
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
			</div>
			</div>

			<div class="form-group row">
			<label for="alamatibu" class="col-sm-2 col-form-label">Alamat Jalan</label>
			<div class="col-sm-5">
			<input type="text" name="alamatibu" class="form-control <?php echo ($error_alamatibu !="" ? "is-invalid" : ""); ?>" id="alamatibu" placeholder="Alamat" value="<?php echo $alamat; ?>">
			<span class="warning"><?php echo $error_alamatibu; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="nohpibu" class="col-sm-2 col-form-label">No. Telp/HP</label>
			<div class="col-sm-5">
			<input type="text" name="nohpibu" class="form-control <?php echo ($error_hpibu !="" ? "is-invalid" : ""); ?>" id="nohpibu" placeholder="Masukkan Angka Saja" value="<?php echo $nohpibu; ?>">
			<span class="warning"><?php echo $error_nohpibu; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="statusibu" class="col-sm-2 col-form-label">Status</label>
			<div class="col-sm-3">
			<div class="form-check form-check-inline">
			<input class="form-check-input <?php if(isset($statusibu) && $statusibu=="Masih Hidup") echo("checked");?>" type="radio" name="statusibu" id="statusibu" value="Masih Hidup">
			<label class="form-check-label" for="statusibu">Masih Hidup</label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input <?php if(isset($statusibu) && $statusibu=="Meninggal") echo("checked");?>" type="radio" name="statusibu" id="statusibu" value="Meninggal">
			<label class="form-check-label" for="status">Meninggal</label>
			</div>
			</div>
			</div>

<!-- END DATA IBU -->

<!-- DATA WALI -->
			<h3 style="color: blue;">Data Wali</h3>
			<div class="form-group row">	
			<label for="namawali" class="col-sm-2 col-form-label">Nama Wali</label>
			<div class="col-sm-5">
			<input type="text" name="namawali" class="form-control <?php echo ($error_namawali !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama Wali" value="<?php echo $namawali; ?>">
			<span class="warning"><?php echo $error_namawali; ?></span>
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
			</div>
			</div>

			<div class="form-group row">
			<label for="alamatwali" class="col-sm-2 col-form-label">Alamat Jalan</label>
			<div class="col-sm-5">
			<input type="text" name="alamatwali" class="form-control <?php echo ($error_alamatwali !="" ? "is-invalid" : ""); ?>" id="alamatwali" placeholder="Alamat" value="<?php echo $alamatwali; ?>">
			<span class="warning"><?php echo $error_alamatwali; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="nohpwali" class="col-sm-2 col-form-label">No. Telp/HP</label>
			<div class="col-sm-5">
			<input type="text" name="nohpwali" class="form-control <?php echo ($error_nohpwali !="" ? "is-invalid" : ""); ?>" id="nohpwali" placeholder="Masukkan Angka Saja" value="<?php echo $nohpwali; ?>">
			<span class="warning"><?php echo $error_nohp; ?></span>
			</div>
			</div>
<!-- END DATA WALI -->
			<div class="form-group row">
			<div class="col-sm-5"><center>	
			<button type="submit" class="btn btn-primary">INPUT</button>
			<button type="reset" class="btn btn-primary">RESET</button>
			</center>
			</div>
			</div>
		</form>
		</div>	
</div>
</body>
</html>

<!-- koneksi -->
<?php
include 'koneksi.php';
		/*AUTO NUMBER*/
		$query = "SELECT max(kd_daftar) as maxKode FROM dataortu";
		$hasil = mysqli_query($conn,$query);
		$data = mysqli_fetch_array($hasil);
		$kodeDaftar = $data['maxKode'];
		$noUrut = (int) substr($kodeDaftar, 3, 5);
		$noUrut++;
		$char = "SDM";
		$kodeDaftar = $char . sprintf("%03s", $noUrut);
		/*END AUTO NUMBER*/
if (!empty($nama) && !empty($pendidikan) && !empty($pekerjaan) && !empty($penghasilan) && !empty($nohp) && !empty($alamat) && !empty($status) && !empty($namaibu) && !empty($pendidikanibu) && !empty($pekerjaanibu) && !empty($penghasilanibu) && !empty($nohpibu) && !empty($alamatibu) && !empty($statusibu)) {
$sql = mysqli_query($conn,"INSERT INTO dataortu (kd_daftar,namaayah,pendidikanayah,pekerjaanayah,penghasilanayah,alamatayah,nohpayah,statusayah,namaibu,pendidikanibu,pekerjaanibu,penghasilanibu,alamatibu,nohpibu,statusibu,namawali,pendidikanwali,pekerjaanwali,penghasilanwali,alamatwali,nohpwali) VALUES ('$kodeDaftar','$nama','$pendidikan','$pekerjaan','$penghasilan','$alamat','$nohp','$status','$namaibu','$pendidikanibu','$pekerjaanibu','$penghasilanibu','$alamatibu','$nohpibu','$statusibu','$namawali','$pendidikanwali','$pekerjaanwali','$penghasilanwali','$alamatwali','$nohpwali')");
if ($sql) {
	echo "<script>location.href= 'upload.php'</script>";
}else{
echo "<script> window.alert('proses gagal');</script>";
}
}
?>