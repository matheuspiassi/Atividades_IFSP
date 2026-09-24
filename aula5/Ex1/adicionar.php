<!DOCTYPE html>
<html>
<head>
  <title>Meu Diário</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $msg = $_POST["msg"];

  if (empty($nome) || empty($msg)) {
    echo "Preencha todos os campos.";
  } else {
    $hora = date("d/m/Y H:i");

    $texto = "\n## " . $nome . "\n" .
             "*" . $hora . "*\n\n" .
             $msg . "\n\n" .
             "---\n";

    $f = fopen("diario.md", "a");
    fwrite($f, $texto);
    fclose($f);

    echo "Entrada salva com sucesso!";
  }
}
?>

<h1>Meu Diário</h1>

<form method="post">
  Título:
  <input type="text" name="nome">
  <br><br>

  Texto:
  <br>
  <textarea name="msg" rows="10" cols="40"></textarea>
  <br><br>

  <input type="submit" value="Salvar">
</form>

</body>
</html>
