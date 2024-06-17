<?php
include('../../../../conf/config.php');
$nama = $_GET['nama'];
$username = $_GET['username'];
$password = $_GET['password'];
$role = $_GET['role'];

$query = mysqli_query($koneksi,"INSERT INTO tb_pengguna (nama,username,password,role) VALUES('$nama','$username','$password','$role')");
header('Location: ../index.php?page=kantor1');
?>