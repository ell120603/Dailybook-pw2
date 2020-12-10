<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$sql = "select * from notas where user_id = 1";
$query = mysqli_query($conexao, $sql);
$row = mysqli_num_rows($query);

if($row > 0){

    while($linha = mysqli_fetch_array($query)){

        $nota = $linha['anotacao'];

        echo $nota;
        echo "</hr> </br> </br>";
    }

}else{
    echo "não existem registros";
}

?>

    
</body>
</html>