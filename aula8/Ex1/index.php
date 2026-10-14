<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas</title>
  </head>
  <body>
    <h1>Adicionar tarefa</h1>

    <form method="POST" action="adicionar.php">
      <label for="usuario">Nome:</label>
      <input type="text" name="usuario" id="usuario" required>
      <br><br>

      <label for="descricao">Tarefa:</label>
      <input type="text" name="descricao" id="descricao" required>
      <br><br>

      <button type="submit">Adicionar tarefa</button>
    </form>
  </body>
</html>
