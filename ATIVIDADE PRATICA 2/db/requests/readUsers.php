<?php
  include_once './db/conexao.php';

  $querySelect = $link->query("SELECT * FROM requests WHERE id = 4 ORDER BY date DESC");

  while ($registros = $querySelect->fetch_assoc()) {
    $id = $registros['id'];
    $descricao = $registros['description'];

    echo "<tr>";
    echo
      "<td>$descricao</td>

      <td>
        <a href='atualizaSetores.php?id=$id'>
          <button >Atualizar</button>
        </a>
      </td>

      <td>
        <a href='./db/requests/deleteUsers.php?id=$id'>
          <button >Apagar</button>
        </a>
      </td>

      ";



    echo "</tr>";
  }

?>
