<?php
session_start();
include('connection.php');
if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('location: login.php');
    exit();
}

$user = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select user_id from login where usuario = '{$user}' and senha = '{$senha}'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

$query_id = "select user_id from login where usuario = '{$user}'";
$result_id = mysqli_query($conexao, $query_id);
$row_id = mysqli_num_rows($result_id);

$id = mysqli_real_escape_string($conexao, $row_id);


if($row==1){
  $_SESSION['usuario'] = $user;
  $_SESSION['id'] = $id;
  header('location: main.php');
  exit();
}else{
   $_SESSION['not_autenticated'] = true;    
   header('location: login.php');
   exit();
}