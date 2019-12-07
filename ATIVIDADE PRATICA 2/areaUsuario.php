<?php require_once ('./db/validador.php') ?>

<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SISTEMA DE PROTOCOLOS</title>

    <!-- Bootstrap início -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap fim -->

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  </head>
  <body>
    <!-- barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
      <div class="container">

        <a class="navbar-brand" href="index.html">
           <img src="./imagens/logo.png" width="100" height="100">
           - SISTEMA DE CONTROLE DE PROTOCOLOS -
        </a>

        <a class="navbar-brand" href="./db/loggof.php">
          <!-- botao para logar -->
          <button class="btn btn-lg btn-info btn-block">Sair</button>
        </a>

      </div>
    </nav>

    <!-- login -->
    <div class="container">
      <div class="row">

        <br>

        <div class="col-4">
          <div class="card-login">
            <div class="card">
              <!-- propaganda descritiva do site!!! -->

              <div class="card-header">
                Cadastro
              </div>

              <div class="card-body">

                <!-- formulário de login -->

                <a class="navbar-brand" href="cadastroRequerimento.php">
                  <button class="btn btn-lg btn-info btn-block">Novo requerimento</button>
                </a>


              </div>
            </div>
          </div>
        </div>

        <div class="col-8">
          <table class="table">
            <thead>
              <tr>
                <th>Requerimentos</th>
              </tr>
            </thead>

            <tbody>
              <?php include_once './db/requests/readUsers.php'; ?>
            </tbody>
          </table>

            <!-- Aqui vai ter um carrossel -->
        </div>
      </div>
    </div>
  </body>

</html>
