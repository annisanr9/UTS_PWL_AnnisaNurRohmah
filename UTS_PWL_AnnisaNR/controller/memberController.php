<?php
session_start();
require_once '../koneksi.php';
require_once '../Models/Member.php';

$user = $_POST['username'];
$pwd = $_POST['password'];

$listData = [$user,$pwd];

$object = new Member();
$login = $object->login($listData);

if(!empty($login)) { 
    $_SESSION['MEMBER'] = $login;
    header('Location: http://localhost/UTS_PWL_AnnisaNR/index.php?hal=dataPegawai');
} else {
    header('Location: http://localhost/UTS_PWL_AnnisaNR/index.php?hal=gagalLogin');
}
