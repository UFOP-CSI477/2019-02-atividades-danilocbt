<?php
  include_once './db/conexao.php';

  $querySelect = $link->query("SELECT * FROM subjects ORDER BY name asc");

  while ($registros = $querySelect->fetch_assoc()) {
    $id = $registros['id'];
    $name = $registros['name'];

    echo "<tr>";
    echo
      "<td>$name</td>

      <td>
        <a href='atualizaProtocolo.php?id=$id'>
          <button >Atualizar</button>
        </a>
      </td>

      <td>
        <a href='./db/subjects/delete.php?id=$id'>
          <button >Apagar</button>
        </a>
      </td>

      ";



    echo "</tr>";
  }

?>
