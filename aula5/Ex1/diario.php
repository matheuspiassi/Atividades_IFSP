<?php
$caminho = "diario.md";
$texto = "";

if (file_exists($caminho)) {
  $texto = file_get_contents($caminho);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Diário</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <div class="container">
    <h1>Meu Diário</h1>

    <nav>
      <a href="adicionar.php">Adicionar entrada</a>
      <a href="diario.php">Ver diário</a>
    </nav>

    <section class="diario">
      <?php if (empty($texto)) { ?>
        <p>Seu diário ainda está vazio.</p>
      <?php } else { ?>
        <pre><?php echo htmlspecialchars($texto); ?></pre>
      <?php } ?>
    </section>
  </div>
</body>
</html>
