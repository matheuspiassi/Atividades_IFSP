<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Aluno</title>
</head>
<body>

<form method="get">
  Nome:
  <input type="text" name="aluno">
  <br><br>

  Nota 1:
  <input type="number" name="n1">
  <br><br>

  Nota 2:
  <input type="number" name="n2">
  <br><br>

  Nota 3:
  <input type="number" name="n3">
  <br><br>

  <input type="submit" value="Salvar">
</form>

<?php
if (isset($_GET["aluno"])) {
  $aluno = $_GET["aluno"];
  $n1 = $_GET["n1"];
  $n2 = $_GET["n2"];
  $n3 = $_GET["n3"];

  file_put_contents("notas.txt", $aluno . ";" . $n1 . ";" . $n2 . ";" . $n3 . "\n", FILE_APPEND);

  echo "Dados salvos!";
}
?>

</body>
</html>
