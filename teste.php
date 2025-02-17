<html>
  <head>
    
    <title>PHP teste</title>
    <link rel="stylesheet" href="style.css">
  </head>
  
  <body>

    <h1> CRUD </h1>
    <h2>Create, Retrieve, Update e Delete  </h2>
    
    <ul>
      <li> <a href="addUser.php"> Adicionar </a> </li>
      <li> <a href="tabela.php"> Atualizar </a> </li>
      <li> <a href="#"> Excluir </a> </li>
      <li> <a href="listUsers.php"> Listar </a> </li>
    </ul>

    <a href="tabela.php">Criar tabela - Apenas na primeira vez</a>
  </body>

  <footer>
    <form method="post">
    <label>Nome:</label><br>
    <input type="text" name="nome"><br>
    <label>Email:</label><br>
    <input type="email" name="email"><br>
    <label>Idade:</label><br>
    <input type="number" name="idade"><br>
    <input type="submit" name="add" value="Adicionar">
    </form>


  </footer>
</html>