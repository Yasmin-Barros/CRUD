<html>
  <head>
    
    <title>PHP teste</title>
    <link rel="stylesheet" href="style.css">
  </head>
  
  <body>
    <h1> <a href="addUser.php"> Adicionar </a></h1>

    <!-- <a href="tabela.php">Criar tabela - Apenas na primeira vez</a> -->
  </body>

  <footer>
    
</footer>


  
<div>

<?php
require_once 'conexao.php';

// Selecionar todos os usuários
$results = $db->query('SELECT * FROM pessoas');

// Exibir todos os usuários em uma tabela HTML
echo '<table>';
//trr é linha --- th é coluna

while ($row = $results->fetchArray()) {

    echo '<h2>' . $row['nome'] . '</h2>';
    echo '<ul>';
    // echo '<li>' . $row['id'] . '</li>';
    
    echo '<li>' . $row['coisa1'] . '</li>';
    echo '<li>' . $row['coisa2'] . '</li>';
    echo '</ul>';
}
echo '</table>';

$db->close();
?>
</div>


</html>