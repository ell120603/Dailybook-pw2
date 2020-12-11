<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DailyBook</title>

    <link
      rel="stylesheet"
      href="node_modules/bootstrap/compiler/bootstrap.css"
    />

    <link rel="stylesheet" href="style/css/style.css" />

    <link
      rel="stylesheet"
      href="node_modules/font-awesome/css/font-awesome.css"
    />
    <link rel="stylesheet" href="./CSS/login_page.CSS" />
    <link rel="stylesheet" href="./CSS/animations.CSS" />
  </head>
  <body>
    <div class="container">
      <div class="lt_book animate-up">
        <div class="calendar">
          <img src="./Books_imgs/iconfinder_Asset_87_3298603 (1).png" alt="book" />
        </div>
        <div class="written">
          <h1 class="text-dark" id="words">DailyBook</h1>
        </div>
      </div>

      <div class="col-12 text center my-5 animate-up" id="login_title">
        <h1 class="text-center text-dark">Fazer login usando sua conta</h1>
      </div>

      <div class="formulario animate-up">
        <form action="verificacoes.php" method="POST">
        <?php
        if(isset($_SESSION['not_autenticated'])):
        ?>
        <div class="alert alert-danger" role="alert">
          E-mail ou Senha inválidos
        </div>
        <?php
        endif;
        unset($_SESSION['not_autenticated']);
        ?>

          <div class="form-group">
            <input
              type="text"
              name="usuario"
              class="form-control form-control-lg"
              id="email"
              placeholder="Usuário"
            />
          </div>

          <div class="form-group">
            <input
              type="password"
              name="senha"
              class="form-control form-control-lg"
              id="senha"
              placeholder="senha"
            />
          </div>

          <button type="submit" class="btn btn-info btn-lg btn-block">
            Entrar</button
          ><br />

          <div class="under_enter animate-up">
            <div class="text-left">
              <a href="cadastro.php" class="text-dark"> Criar conta </a>
            </div>
            
          </div>
        </form>
      </div>
    </div>
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/Popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </body>
</html>
