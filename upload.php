<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="asset/css/form.css">
</head>
<body>
	<!-- SIDEBAR -->
	<div class="sidebar">
	<a href="">Beranda</a>
	<a href="">Data Siswa</a>
	<a href="">Data Orang Tua</a>
	<a href="" class="active">Berkas</a>
</div>
	<!-- END SIDEBAR -->
	<div class="card" style="margin-left: 250px;">
	<div class="card-header">
	<h2 style="text-align:center;">FORMULIR PESERTA DIDIK</h2>
	<h4 style=" color: red">Pilih Gambar Dengan Benar</h4>
	</div>
<div class="card-body">
<form method="POST" action="" enctype="multipart/form-data" class="was-validated">
<!-- FOTO DIRI -->
	<div class="form-group row">	
	<label for="fotodiri" class="col-sm-2 col-form-label">Foto Diri 3x4</label>
	<div class="col-sm-5">
	<div class="custom-file mb-3">
    <input type="file" class="custom-file-input" name="fotodiri" id="fotodiri" required>
    <label class="custom-file-label" for="fotodiri">Pilih File</label>
    <div class="invalid-feedback">File tidak valid atau belum dimasukkan</div>
  	</div>
  	</div>
  	</div>
<!-- FOTO KK -->
	<div class="form-group row">	
	<label for="fotokk" class="col-sm-2 col-form-label">Foto Kartu Keluarga</label>
	<div class="col-sm-5">
	<div class="custom-file mb-3">
    <input type="file" class="custom-file-input" name="fotokk" id="fotokk" required>
    <label class="custom-file-label" for="fotokk">Pilih File</label>
    <div class="invalid-feedback">File tidak valid atau belum dimasukkan</div>
  	</div>
  	</div>
	</div>
<!-- FOTO AKTA -->
	<div class="form-group row">	
	<label for="fotoakta" class="col-sm-2 col-form-label">Foto Akta Lahir</label>
	<div class="col-sm-5">
	<div class="custom-file mb-3">
    <input type="file" class="custom-file-input" name="fotoakta" id="fotoakta" required>
    <label class="custom-file-label" for="fotoakta">Pilih File</label>
    <div class="invalid-feedback">File tidak valid atau belum dimasukkan</div>
  	</div>
  	</div>
	</div>
<!-- FOTO IJAZAH TK -->
	<div class="form-group row">	
	<label for="fotoijazah" class="col-sm-2 col-form-label">Foto Ijazah</label>
	<div class="col-sm-5">
	<div class="custom-file mb-3">
    <input type="file" class="custom-file-input" name="fotoijazah" id="fotoijazah" required>
    <label class="custom-file-label" for="fotoijazah">Pilih File</label>
    <div class="invalid-feedback">File tidak valid atau belum dimasukkan</div>
  	</div>
  	</div>
	</div>
<!-- FOTO KPS JIKA ADA -->
	<div class="form-group row">	
	<label for="fotokps" class="col-sm-2 col-form-label">Foto KPS</label>
	<div class="col-sm-5">
	<div class="custom-file mb-3">
    <input type="file" class="custom-file-input" name="fotokps" id="validatedCustomFile">
    <label class="custom-file-label" for="fotokps">Pilih File</label>
    <div>Jika Ada</div>
  	</div>
  	</div>
	</div>

<div class="form-group row">
		<div class="col-sm-5"><center>	
		<input type="submit" name="tombol" class="btn btn-primary">
		<input type="reset" name="reset" class="btn btn-primary">
		</center>
		</div>
</div>
</form>
</div>
</div>
</body>
</html>
<?php
include 'koneksi.php';
/*AUTO NUMBER*/
		$query = "SELECT max(kd_daftar) as maxKode FROM upload";
		$hasil = mysqli_query($conn,$query);
		$data = mysqli_fetch_array($hasil);
		$kodeDaftar = $data['maxKode'];
		$noUrut = (int) substr($kodeDaftar, 3, 5);
		$noUrut++;
		$char = "SDM";
		$kodeDaftar = $char . sprintf("%03s", $noUrut);
		/*END AUTO NUMBER*/
/*proses insert*/
if (isset($_POST['tombol'])) {

$fileName = $_FILES['fotodiri']['name'];
$fileName2 = $_FILES['fotokk']['name'];
$fileName3 = $_FILES['fotoakta']['name'];
$fileName4 = $_FILES['fotoijazah']['name'];
$fileName5 = $_FILES['fotokps']['name'];
// Simpan ke Database
$sql = "INSERT INTO upload (kd_daftar,namadiri, namakk,namaakta,namaijazah,namakps) values ('$kodeDaftar','$fileName','$fileName2','$fileName3','$fileName4','fileName5')";
mysqli_query($conn,$sql);
// Simpan di Folder Gambar
move_uploaded_file($_FILES['fotodiri']['tmp_name'], "gambar/".$fileName);
move_uploaded_file($_FILES['fotokk']['tmp_name'], "gambar/".$fileName2);
move_uploaded_file($_FILES['fotoakta']['tmp_name'], "gambar/".$fileName3);
move_uploaded_file($_FILES['fotoijazah']['tmp_name'], "gambar/".$fileName4);
move_uploaded_file($_FILES['fotokps']['tmp_name'], "gambar/".$fileName5);
echo "<script>window.location='print.php?kd_daftar=$kodeDaftar'</script>";
}
?>