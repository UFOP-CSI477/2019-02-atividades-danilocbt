<?php
  session_start();
  include_once '../conexao.php';

  // $nome = $_POST['nome'] isso não é uma boa tecnica pois é perigoso... abaixo segue um melhor
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_SPECIAL_CHARS);

  $queryInsert = $link->query("INSERT INTO subjects (name, price, created_at) VALUES('$nome', '$preco', now())");
  $affected_rows = mysqli_affected_rows($link);

  if ($affected_rows > 0):
    header("Location:../../areaAdministrador.php");
  endif;
?>
