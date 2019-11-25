<?php

session_start();

  $user ='root';
  $pass = 'Admin09';

  try{
   
  $pdo = new PDO('mysql:host=localhost;dbname=prueba', $user, $pass);


  
  }catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
  }


$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];



$sql = 'INSERT INTO users(name, email, tel, asunto, mensaje)VALUES(?,?,?,?,?)';

$send = $pdo->prepare($sql);

$send->execute([$name,$email,$tel,$asunto,$mensaje]);

$_SESSION['message'] = 'enviado';
