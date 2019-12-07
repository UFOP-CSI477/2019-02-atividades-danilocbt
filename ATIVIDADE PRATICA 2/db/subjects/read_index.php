<?php
  include_once './db/conexao.php';

  $querySelect = $link->query("SELECT * FROM subjects ORDER BY name asc");

  while ($registros = $querySelect->fetch_assoc()) {
    $id = $registros['id'];
    $name = $registros['name'];
    $price = $registros['price'];

    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$price</td>";
    echo "</tr>";
  }

?>
