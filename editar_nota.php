<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Nota</title>
    <link
      rel="stylesheet"
      href="node_modules/bootstrap/compiler/bootstrap.css"/>

    <link rel="stylesheet" href="style/css/style.css"/>
    <link rel="stylesheet" href="CSS/cadastro.css"/>
    <link
      rel="stylesheet"
      href="node_modules/font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="./CSS/animations.CSS"/>
</head>
<body>
  <nav class="row navbar navbar-expand-lg navbar-dark bg-info">
    <div class="navbar-brand mb-0" id="title">
     <img src="./Books_imgs/iconfinder_Asset_87_3298603 (2).png" alt="little_book"> <strong><h2>Dailybook</h2></strong> 
    </div> 
</nav>   
<br>
<br>

<form action="editar.php" method="POST">
<textarea id="nota" name="edit"
            rows="5" cols="180" placeholder="escreva sua anotação">
  </textarea>
  <div class="botao">
  <div class="form-row ">
    <div class="form-group fol-sm-12">
        <p><button type="submit" class="btn btn-primary ">Salvar</button>
        <a href="main.php" class="btn btn-warning ">Sair</a>
        </p>
        </div>
        </div>
        </form>



 </body>
</html>