<?php
include('../../../../conf/config.php');
$id = $_GET['id'];


$query = mysqli_query($koneksi,"DELETE FROM tb_desa WHERE id_desa='$id'");
header('Location: ../index.php?page=desa');
?>