<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>

    <link
      rel="stylesheet"
      href="node_modules/bootstrap/compiler/bootstrap.css"/>

    <link rel="stylesheet" href="style/css/style.css"/>

    <link
      rel="stylesheet"
      href="node_modules/font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="./CSS/cadastro.css">
</head>
<body>

    <nav class="row navbar navbar-expand-lg navbar-dark bg-info">
          <div class="navbar-brand mb-0" id="title">
           <img src="./Books_imgs/iconfinder_Asset_87_3298603 (2).png" alt="little_book"> <strong><h2>BookSpace</h2></strong> 
          </div> 
    </nav>    

    <div >

      <div class="col-12 text center my-5">
         <h1 class="text-center"> Cadastre-se</h1>
      </div>
    </div>  
    <div class="row justify-content-center mb-5">

      <div class="col-sm-12 col-md-10 col-lg-8">

      
      
      <form action="cadastrar.php" method="POST">
      <?php
          if(isset($_SESSION['status_cadastro'])):
        ?>
        <div class="alert alert-success" role="alert">
            cadastro realizado com sucesso
          </div> 
          <?php
            endif;
            unset($_SESSION['status_cadastro']);
          ?>    
        
          <?php
          if(isset($_SESSION['usuario_existe'])):
          ?>
          
        <div class="alert alert-danger" role="alert">
            O usuário já existe
          </div>       
          <?php
          endif;
          unset($_SESSION['usuario_existe'])
          ?>  
     
         

        <div class="form row">
          <div class="form-group col-sm-12">
            <input type="text" class="form-control" id="inputEmail" placeholder="Usuário" name="usuario">
          </div>

        </div>  
          <div class="form row">  
            <div class="form-group col-sm-6">
              <input type="senha" class="form-control" id="inputSenha" placeholder="Senha" name="senha">
            </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" id="inputCSenha" placeholder="Confirmar Senha">
          </div>
          <br>  <br>  <br>  <br>
      </div> 
                    
      

          
          <div id="button_2">
            <div id="button_1">
              <button type="submit" class="btn btn-primary btn-center btn-block ">cadastrar</button>
            </div>  
          </div>

          <div id="voltar" >
          <a href="login.php" class="btn btn-primary btn-right btn"> < voltar </a>
          </div>
         
       </div>
      </form>

    </div>

    
    <div class="row" id="footer"></div>


    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/Popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>