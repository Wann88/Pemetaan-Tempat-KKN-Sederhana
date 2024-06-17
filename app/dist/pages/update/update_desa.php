<?php
include('../../../../conf/config.php');
$id = $_GET['id'];
$lokasi = $_GET['lokasi'];
$keterangan = $_GET['keterangan'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];
$kelompok = $_GET['kelompok'];
$anggota = $_GET['anggota'];

$query = mysqli_query($koneksi,"UPDATE tb_desa SET lokasi='$lokasi',keterangan='$keterangan',lat='$lat',lng='$lng',kelompok='$kelompok',anggota='$anggota' WHERE id_desa='$id'");
header('Location: ../index.php?page=desa');
?>