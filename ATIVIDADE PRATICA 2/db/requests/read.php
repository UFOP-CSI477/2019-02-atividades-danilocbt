<?php
  include_once './db/conexao.php';

  $querySelect = $link->query("SELECT * FROM requests ORDER BY description ASC");

  while ($registros = $querySelect->fetch_assoc()) {

    $descricao = $registros['description'];

    echo "<tr>";
    echo
      "<td>$descricao</td>
      ";

    echo "</tr>";
  }

?>
