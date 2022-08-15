<?php

$koneksi =mysqli_connect('localhost','root','','db_login_xiiirpl2');

if(mysqli_connect_errno()){
    echo'Koneksi Database Gagal:'.mysqli_connect_error();
}

?>