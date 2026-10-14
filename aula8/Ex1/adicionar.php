<?php
  $usuario   = $_POST['usuario'];
  $descricao = $_POST['descricao'];

  $nomeArquivo = $usuario . ".md";
  $linha       = "□ " . $descricao . PHP_EOL;

  file_put_contents($nomeArquivo, $linha, FILE_APPEND);

  echo "Tarefa adicionada com sucesso!";
  echo "<br><br>";
  echo "<a href='index.php'>Voltar</a>";
?>
