<?php

$usuario = 'root';
$password='Admin09';

try {

    $pdo = new PDO('mysql:host=localhost;dbname=yt_colores', $usuario, $password);
   
}catch(PDOException $e){
     print 'Error' . $e->getMessage();
     die ();
}
