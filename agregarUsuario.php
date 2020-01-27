<?php
session_start();
include_once("./conexion.php");

if($_POST){
    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $password2 = $_POST['password2'];
}



$sql = "SELECT * FROM usuarios WHERE username = ?";
$resultado = $pdo->prepare($sql);
$resultado->execute([$username]);
$row = $resultado->fetch();


if($username === $row['username']){
    $_SESSION['duplicado'] ="username exist   ";
    header('location:registro.php');
    die();
}



if($password === $password2){
    $pass = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarios(username, password) VALUES(?, ?)";
    $resultado = $pdo->prepare($sql);
    $resultado->execute([$username,$pass]);

    $_SESSION['user'] = $username;
    header('location:profile.php');
}else{

    $_SESSION['error'] ="la contraseña no coinciden ";
    header('location:registro.php');
}


