<?php
session_start();
include("connection.php");

$note = mysqli_real_escape_string($conexao, trim($_POST['nota']));

$sql = "select count(*) as total from notas where usuario = '$note'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('location: main.php');
    exit;
}

$my_id = mysqli_real_escape_string($conexao, $_SESSION['id'] );

$sql = "insert into notas (anotacao, user_id) values ('$note', '$my_id')";


if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('location: main.php');
exit;
?>