<?php
session_start();
include('connection.php');



$note_id = $_SESSION['nid'];

$query = "delete from notas where nota_id = '$note_id'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row){
$conexao->close();
header('location: main.php');
}else{
    echo 'não foi possível excluir';
    header('location: main.php');
}