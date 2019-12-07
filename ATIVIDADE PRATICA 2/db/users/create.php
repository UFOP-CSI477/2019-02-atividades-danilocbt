<?php
  session_start();
  include_once '../conexao.php';

  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
  $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS);

  if($tipo == 1){
    $queryInsert = $link->query("INSERT INTO users (name, email, senha, type, created_at) VALUES('$nome', '$email', '$senha', 1, now())");
  }else{
    $queryInsert = $link->query("INSERT INTO users (name, email, senha, type, created_at) VALUES('$nome', '$email', '$senha', 2, now())");
  }


  $affected_rows = mysqli_affected_rows($link);

  if ($affected_rows > 0):
    // $_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!'."<br>";
    header("Location:../../index.php");
  endif;

?>
