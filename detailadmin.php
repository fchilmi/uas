<?php
include 'koneksi.php';
if (isset($_GET['kd_daftar'])) {
	$get = $_GET['kd_daftar'];

$sql = mysqli_query($conn, "SELECT s.*, o.* FROM datasiswa s JOIN dataortu o ON s.kd_daftar=o.kd_daftar  WHERE s.kd_daftar = '$get'");
while ($id = mysqli_fetch_object($sql)){


?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Admin</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		body {
			background-color: #f1f1f1;
		}
		.navbar p {
			font-size: 23px;
			font-weight: bold;
			color: white;
		}
		.navbar img {
			margin-left: 30px;
		}
		.collapse {
			margin-left: 300px;
		}
		.collapse li a {
			margin-left: 15px;
			font-weight: bold;
			margin-right: 30px;
		}
		.card {
         margin-top: 10px;
        -webkit-box-shadow: 0 1px 1px 0 rgba(159,167,194,.6);
        -moz-box-shadow: 0 1px 1px 0 rgba(159,167,194,.6);
         box-shadow: 0 1px 1px 0 rgba(159,167,194,.6);
         margin-left: 0%;
   		 }
   		.isi {
   			margin: 50px;
   			text-align: center;
   		 }
   		 .isi h3{
   		 	text-align: left;
   		 	font-weight: normal;
   		 }
   		 .isi p{
   		 	text-align: justify;
   		 }
		.footer {
			background-color: #606060;
			height: 120px;
			text-align: center;
			margin-top: 5px;

		}
		.footer img {
			margin-top: 15px;
			margin-bottom: 10px;
		}
		.footer p{
			color: white;
		}
		#judul {
			font-weight: bold;
			font-size: 30px;
			padding-top: 10px;
		}
	</style>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #606060;">
	<a class="navbar-brand" href="select.php?pesan=login">
    	<img src="asset/image/limas0-940x356.jpg" width="80" height="80" class="d-inline-block align-center"></a>
  	<p>Admin<br>Detail</p>
	</nav>
	</header>
	<body>
<div class="container-fluid">
		 <div class="col-md-12 card">
		  	<div class="col-md-12" id="judul"><p>DETAIL PESERTA</p><hr></div>
		  	<div class="row">
				<div class="col-md-6">
				<div class="card">
				<table class="table table-borderless col-md-10">
				<h4>DATA SISWA</h4>
				<tr>
				<td>Kode Pendaftaran</td>
				<td>:</td>
				<td><?php echo $id->kd_daftar ?></td>
				</tr>
					<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><?php echo $id->namasis ?></td>
					</tr>
				<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><?php echo $id->jkel ?></td>
				</tr>
				<tr>
					<td>NIK</td>
					<td>:</td>
					<td><?php echo $id->nik ?></td>
					</tr>
				<tr>	
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><?php echo $id->temlahir ?></td>
				</tr>
					<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><?php echo $id->tglahir ?></td>
					</tr>
				<tr>	
				<td>No. Akta</td>
				<td>:</td>
				<td><?php echo $id->akta ?></td>
				</tr>
					<tr>	
					<td>Agama</td>
					<td>:</td>
					<td><?php echo $id->agama ?></td>
					</tr>
				<tr>	
				<td>Kewarganegaraan</td>
				<td>:</td>
				<td><?php echo $id->kwn ?></td>
				</tr>	
					<tr>
					<td>Berkebutuhan Khusus</td>
					<td>:</td>
					<td><?php echo $id->berkebut ?></td>
					</tr>
				<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?php echo $id->alamat ?></td>
				</tr>
					<tr>
					<td>RT</td>
					<td>:</td>
					<td><?php echo $id->rt ?></td>
					</tr>
				<tr>
				<td>RW</td>
				<td>:</td>
				<td><?php echo $id->rw ?></td>
				</tr>
					<tr>
					<td>Dusun</td>
					<td>:</td>
					<td><?php echo $id->dusun ?></td>
					</tr>
				<tr>
				<td>Kelurahan</td>
				<td>:</td>
				<td><?php echo $id->kelurahan ?></td>
				</tr>
					<tr>
					<td>Kecamatan</td>
					<td>:</td>
					<td><?php echo $id->kecamatan ?></td>
					</tr>
				<tr>
				<td>Kode Pos</td>
				<td>:</td>
				<td><?php echo $id->kodepos ?></td>
				</tr>	
					<tr>
					<td>Tempat Tinggal</td>
					<td>:</td>
					<td><?php echo $id->tinggal ?></td>
					</tr>
				<tr>
				<td>Moda Transportasi</td>
				<td>:</td>
				<td><?php echo $id->transport ?></td>
				</tr>	
					<tr>
					<td>Anak Ke-</td>
					<td>:</td>
					<td><?php echo $id->anak ?></td>
					</tr>
				<tr>
				<td>Penerima KPS</td>
				<td>:</td>
				<td><?php echo $id->kps ?></td>
				</tr>
					<tr>
					<td>No. KPS (jika ada)</td>
					<td>:</td>
					<td><?php echo $id->nokps ?></td>
					</tr>	
				</table>
				</div>
			</div>
				
				<div class="col-md-6">
				<div class="card">
				<table class="table table-borderless col-md-12" >
				<h4>DATA ORANG TUA</h4>
				<tr>
				<td>Nama Ayah</td>
				<td>:</td>
				<td><?php echo $id->namaayah ?></td>
				</tr>
					<tr>
					<td>Pendidikan Ayah</td>
					<td>:</td>
					<td><?php echo $id->pendidikanayah ?></td>
					</tr>
				<tr>
				<td>Pekerjaan Ayah</td>
				<td>:</td>
				<td><?php echo $id->pekerjaanayah ?></td>
				</tr>
					<tr>
					<td>Penghasilan Ayah</td>
					<td>:</td>
					<td><?php echo $id->penghasilanayah ?></td>
					</tr>
				<tr>
				<td>Alamat Ayah</td>
				<td>:</td>
				<td><?php echo $id->alamatayah ?></td>
				</tr>
					<tr>
					<td>Telepon Ayah</td>
					<td>:</td>
					<td><?php echo $id->nohpayah ?></td>
					</tr>
				<tr>
				<td>Status Ayah</td>
				<td>:</td>
				<td><?php echo $id->statusayah ?></td>
				</tr>
					<tr>
					<td>Nama Ibu</td>
					<td>:</td>
					<td><?php echo $id->namaibu ?></td>
					</tr>
				<tr>
				<td>Pendidikan Ibu</td>
				<td>:</td>
				<td><?php echo $id->pendidikanibu ?></td>
				</tr>
					<tr>
					<td>Pekerjaan Ibu</td>
					<td>:</td>
					<td><?php echo $id->pekerjaanibu ?></td>
					</tr>
				<tr>
				<td>Penghasilan Ibu</td>
				<td>:</td>
				<td><?php echo $id->penghasilanibu ?></td>
				</tr>
					<tr>
					<td>Alamat Ibu</td>
					<td>:</td>
					<td><?php echo $id->alamatibu ?></td>
					</tr>
				<tr>
				<td>Telepon Ibu</td>
				<td>:</td>
				<td><?php echo $id->nohpibu ?></td>
				</tr>
					<tr>
					<td>Status Ibu</td>
					<td>:</td>
					<td><?php echo $id->statusibu ?></td>
					</tr>
				<tr>
				<td>Nama Wali</td>
				<td>:</td>
				<td><?php echo $id->namawali ?></td>
				</tr>
					<tr>
					<td>Pendidikan Wali</td>
					<td>:</td>
					<td><?php echo $id->pendidikanwali ?></td>
					</tr>
				<tr>
				<td>Pekerjaan Wali</td>
				<td>:</td>
				<td><?php echo $id->pekerjaanwali ?></td>
				</tr>
					<tr>
					<td>Penghasilan Wali</td>
					<td>:</td>
					<td><?php echo $id->penghasilanwali ?></td>
					</tr>
				<tr>
				<td>Alamat Wali</td>
				<td>:</td>
				<td><?php echo $id->alamatwali ?></td>
				</tr>
					<tr>
					<td>Telepon Wali</td>
					<td>:</td>
					<td><?php echo $id->nohpwali ?></td>
					</tr>
					</table>
					</div>
					</div>
			<div class="col-md-12">
			<div class="card">
			<table class="table table-borderless col-md-4">
            <?php 
            $query = mysqli_query($conn,"SELECT * FROM upload WHERE kd_daftar='$get'");
            while($row = mysqli_fetch_array($query)){
                  ?>
            <tr>
            <td>Foto Diri<br>
            <img src="gambar/<?php echo $row['namadiri']; ?>" width="250"/>
        	</td>
                	<td>Foto Kartu Keluarga<br>
                    <img style="width: 250px;" src="gambar/<?php echo $row['namakk']; ?>" width="250"/>
                	</td>
            <td>Foto Akta<br>
        	<img style="width: 250px;" src="gambar/<?php echo $row['namaakta']; ?>" width="250"/>
        	</td>
		            <td>Foto Ijazah<br>
		            <img src="gambar/<?php echo $row['namaijazah']; ?>"width="250"/></td>
            <td>Foto KPS<br>
            <img src="gambar/<?php echo $row['namakps']; ?>"width="250"/>
        	</td>
                </tr>
         <?php
            }
            ?>
			</table>
			</div>
			</div>

	</div>
	</div>
	</div>	
</body>
<br>
<div class="footer">
	<img src="asset/image/limas0-940x356.jpg" width="80" height="80"><br>
</div>
</body>
</html>
<?php } }?>