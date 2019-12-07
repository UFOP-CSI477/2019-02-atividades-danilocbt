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

        <a class="navbar-brand" href="index.php">
           <img src="./imagens/logo.png" width="100" height="100">
           - SISTEMA DE CONTROLE DE PROTOCOLOS -
        </a>
      </div>
    </nav>

    <!-- login -->
    <div class="container">
      <div class="row">

        <div class="col-12">
          <div class="card-login">
            <div class="card">
              <!-- propaganda descritiva do site!!! -->

              <div class="card-header">
                Cadastro de usuários:
              </div>

              <div class="card-body">

                <!-- formulário de login -->
                <form action="./db/users/create.php" method="post">
                  <!-- email -->
                  <div class="form-group">
                    <label>Nome:</label>
                    <input name="nome" type="text" class="form-control" placeholder="Nome">
                  </div>

                  <div class="form-group">
                    <label>E-mail: </label>
                    <input name="email" type="email" class="form-control" placeholder="E-mail">
                  </div>
                  <!-- senha -->
                  <div class="form-group">
                    <label>Senha: </label>
                    <input name="senha" type="password" class="form-control" placeholder="Senha">
                  </div>


                  <label>Tipo de usuário: </label>
                  <select class="form-control" name="tipo">

                    <option value="1">Administrador</option>
                    <option value="2">Usuário padrão</option>

                  </select>

                  <br>


                  <div class="row mt-5">

                    <div class="col-4">
                      <a href="index.php"class="btn btn-lg btn-warning btn-block">Voltar</a>
                    </div>

                    <div class="col-8">
                      <button class="btn btn-lg btn-info btn-block" type="submit">Finalizar cadrastro!</button>
                    </div>

                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
