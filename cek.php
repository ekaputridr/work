<?php

session_start();

include "koneksi.php";

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "select * from admin where id='$id', username='$username', password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: admin/form.php");
}else{
    header("location: form.php?pesan=gagal");
}