<?php include('config.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];


$query = mysqli_query($koneksi,"SELECT * FROM tb_pengguna WHERE username='$username' and password='$password' ");

if(mysqli_num_rows($query)==1){
    header('Location:../app/index.php');
    $user= mysqli_fetch_array($query);
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['role'] = $user['role'];
}else if($username == '' || $password == ''){
    header('Location:../login.php?error=2');
}
else{
    header('Location:../login.php?error=1');
}



?>