<?php
include 'koneksi.php';
if (isset($_GET['kd_daftar'])) {
	$get=$_GET['kd_daftar'];
$sql=mysqli_query($conn,"delete s.* , o.* , u.* from datasiswa s , dataortu o , upload u where s.kd_daftar=o.kd_daftar AND s.kd_daftar= '$get'");
if($sql === TRUE){
    echo "sukses";
    echo "<script>window.location='select.php?pesan=login'</script>";
}else{
    echo "gagal";
}
}
?>