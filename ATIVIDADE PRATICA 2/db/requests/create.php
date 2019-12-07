<?php
  session_start();
  include_once '../conexao.php';

  $idProtocolo = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $descricao = filter_input(INPUT_POST, 'descrcao', FILTER_SANITIZE_SPECIAL_CHARS);
  // $data = $_POST['data'];

  $queryInsert = $link->query("INSERT INTO requests (user_id, subject_id, description, date, created_at) VALUES(4, '$idProtocolo', '$descricao', '2019-09-09', now())");

  $affected_rows = mysqli_affected_rows($link);

  if ($affected_rows > 0):
    header("Location:../../index.php");
  endif;

?>
