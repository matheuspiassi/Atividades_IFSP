<?php
$conteudo = file_get_contents("receita.md");
$partes = explode("\n", $conteudo);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Receitas</title>
</head>
<body>

<h1>Receitas</h1>

<?php
foreach ($partes as $item) {
  if (substr($item, 0, 2) == "# ") {
    echo "<h2>" . substr($item, 2) . "</h2>";
  } else if (substr($item, 0, 8) == "![Foto](") {
    $img = str_replace(")", "", str_replace("![Foto](", "", $item));
    echo "<img src='" . $img . "' width='300'>";
  } else if ($item == "## Ingredientes") {
    echo "<h3>Ingredientes</h3>";
  } else if ($item == "## Modo de preparo") {
    echo "<h3>Modo de preparo</h3>";
  } else if ($item != "" && $item != "---") {
    echo "<p>" . $item . "</p>";
  }
}
?>

</body>
</html>
