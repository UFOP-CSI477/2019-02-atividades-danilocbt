<!-- classe de coxexão com o banco de dados -->

<?php
  $utf8 = header("Content-Type: text/html; charset=utf-8");
  // $link = new mysqli('localhost', 'root', '', 'protocols');
  $link = new mysqli('localhost', 'sistemasweb', '123456', 'protocols');
  $link->set_charset('utf8');
?>
