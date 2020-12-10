<?php
session_start();
include("connection.php");

$query_id = "select nota_id from notas";
$result_id = mysqli_query($conexao, $query_id);
$row_id = mysqli_num_rows($result_id);

$note_id = $_SESSION['nid'];

$edit = mysqli_real_escape_string($conexao, trim($_POST['edit']));

$sql = "select count(*) as total from notas where usuario = '$edit'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('location: main.php');
    exit;
}


$sql = "update notas set anotacao = '$edit' where nota_id = '$note_id'"; 


if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('location: main.php');
exit;
?>