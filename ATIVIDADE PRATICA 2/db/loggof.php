<?php
  // sempre que vamos trabalhar com sessão devemos chamar o método abaixo para ter acesso a essa super global
  // iniciamos a sessão
  session_start();

  session_destroy();
  header('Location: ../index.php');

?>
