<?php
include('../../../../conf/config.php');
$id = $_GET['id'];
$nama = $_GET['nama'];
$username = $_GET['username'];
$password = $_GET['password'];
$role = $_GET['role'];

$query = mysqli_query($koneksi,"UPDATE tb_pengguna SET nama='$nama',username='$username',password='$password',role='$role' WHERE id='$id'");
header('Location: ../index.php?page=kantor1');
?>