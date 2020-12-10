<?php
session_start();
include("connection.php");

$user = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

$sql = "select count(*) as total from login where usuario = '$user'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('location: Cadastro.php');
    exit;
}

$sql = "insert into login (usuario, senha) values ('$user', '$senha')";


if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('location: cadastro.php');
exit;
?>