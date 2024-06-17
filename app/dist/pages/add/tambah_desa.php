<?php
include('../../../../conf/config.php');
$lokasi = $_GET['lokasi'];
$keterangan = $_GET['keterangan'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];
$kelompok = $_GET['kelompok'];
$anggota = $_GET['anggota'];

$query = mysqli_query($koneksi,"INSERT INTO tb_desa (lokasi,keterangan,lat,lng,kelompok,anggota) VALUES('$lokasi','$keterangan','$lat','$lng','$kelompok','$anggota')");
header('Location: ../index.php?page=desa');
?>