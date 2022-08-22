<?php
session_start();
include 'koneksi.php';
$username =$_POST['username'];
$password =md5($_POST['password']);
$login = mysqli_query($koneksi,"select*from t_user where username='$username'and password='$password'");
$cek = mysqli_num_rows($login);
if($cek>0){
   $data = mysqli_fetch_assoc($login);
}if($data['level'] == "admin"){
    $_SESSION['status'] = 'login';
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "admin";
    header("location:admin/index.php?data=admin");
}else if($data['level'] == "walas"){
    $_SESSION['status'] = 'login';
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "walas";
    header('location:walas/index.php?data=wali kelas');
}else if($data['level'] == "gr-piket"){
    $_SESSION['status'] = 'login';
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "gr-piket";
    header('location:guru-piket/index.php?data=guru piket');
}else{
    header("location:index.php?data=gagal");
}



?>

