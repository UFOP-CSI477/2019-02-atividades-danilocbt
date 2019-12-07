<?php
  session_start();
  include_once '../conexao.php';
  $id = $_SESSION['id'];
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_SPECIAL_CHARS);

  $queryUpdate = $link->query("UPDATE subjects SET name='$nome', price='$preco', updated_at=now() WHERE id='$id'");
  $affected_rows = mysqli_affected_rows($link);

  if($affected_rows > 0):
    header("Location:../../areaAdministrador.php");
  endif;
?>
