<?php
session_start();
include('verifica_login.php');
include('connection.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina incial</title>
    <link
      rel="stylesheet"
      href="node_modules/bootstrap/compiler/bootstrap.css"/>

    <link rel="stylesheet" href="style/css/style.css"/>
    <link
      rel="stylesheet"
      href="node_modules/font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="./CSS/animations.CSS"/>
    <link rel="stylesheet" href="./CSS/cadastro.css"/>

</head>
<body>
  <nav class="row navbar navbar-expand-lg navbar-dark bg-info">
    <div class="navbar-brand mb-0" id="title">
     <img src="./Books_imgs/iconfinder_Asset_87_3298603 (2).png" alt="little_book"> <strong><h2>Dailybook</h2></strong> 
    </div> 
</nav>   
<br>
<br>

<form action="gravarnota.php" method="POST">
  <textarea id="nota" name="nota"
            rows="5" cols="180" placeholder="escreva sua anotação">
  </textarea>
  <div class="botao">
  <div class="form-row ">
    <div class="form-group fol-sm-12">
        <p><button type="submit" class="btn btn-primary ">Salvar</button>
        <a href="logout.php" class="btn btn-warning ">Sair</a>
        </p>
        </div>
        </div>
        </form>
        <div class="row">
          <div class="col-12 text-center"> 
              <h2 class="display-4 "> minhas notas</h2>    
          </div>
          </div>
        </div>
        


  <?php
      $sql = "select * from notas where user_id = '{$_SESSION['id']}'";
      $query = mysqli_query($conexao, $sql);
      $row = mysqli_num_rows($query);

      if($row > 0){

          while($linha = mysqli_fetch_array($query)){

            $nota = $linha['anotacao'];
            $nid = $linha['nota_id'];
            $_SESSION['nid'] = $nid;
            echo ' <div class="card w-75"> <div class="card-body">';
            echo '<h5 class="card-title">' . $nid . '</h5>';
            echo '<p class="card-text">' . $nota . '</p>';
            echo '<a href="editar_nota.php" class="btn btn-primary">Editar</a> <a href="deletar.php" class="btn btn-danger">excluir</a>';
            echo '</div> </div>';
            echo "</hr> </br> </br>";
          }

      }else{
          echo "não existem registros";
      }
      ?>
</body>
</html>