<?php
require_once('./conexion.php');
session_start();

$username =  $_POST['username'];
$password =  $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE username = ?";
$resultado = $pdo->prepare($sql);
$resultado->execute([$username]);
$row = $resultado->fetch();

if(!isset($row['username'])){
    $_SESSION['message']='user not found';
    header('location:login.php');
    die();
}

if(password_verify($password, $row['password'])){
    $_SESSION['user']= $username;
     header('location:profile.php');
}else {
    $_SESSION['password']='password not wrong';
    header('location:login.php');
}


