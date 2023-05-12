<?php
session_start();
include_once 'koneksi.php';
include_once 'models/member.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = [
    $username,
    $password
];

$model = new Member();
    $rs = $model->cekLogin($data);
    if(!empty($rs)){
        $_SESSION['MEMBER'] = $rs;
        header('Location:index.php?url=product');
    }else{
        echo '<script> alert("username/password Anda salah!");history.back();</script>';
    }

?>