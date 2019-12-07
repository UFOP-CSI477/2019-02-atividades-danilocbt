<?php

  // sempre é fundamental termos a chamada da função abaixo quando estamos trabalhando com projetos que contenham mais de uma seção
  // a mesma deverá ficar antes de qualquer impressão de dados no navegador

  session_start();

  include_once 'conexao.php';


  //VARIAVEL QUE VERIFICA SE A AUTENTICAÇÃO FOI REALIZADA
  $usuario_autenticado = false;

  $emailTemp = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $senhaTemp = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

  // pega os dados dados passados
  $querySelect = $link->query("SELECT * FROM users WHERE email = '$emailTemp'");

  while ($registros = $querySelect->fetch_assoc()) {
    $id = $registros['id'];
    $nome = $registros['name'];
    $email = $registros['email'];
    $senha = $registros['senha'];
    $type = $registros['type'];
  }

  if ($email == $emailTemp && $senha == $senhaTemp){
    $usuario_autenticado = true;
  }

  if($usuario_autenticado){
    $_SESSION['autenticado'] = 'SIM';
    if($type == 1){
      header('Location: ../areaUsuario.php');
    }

    if($type == 2){
      header('Location: ../areaAdministrador.php');
    }

  }else {
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: ../index.php?login=erro');
  }


?>
