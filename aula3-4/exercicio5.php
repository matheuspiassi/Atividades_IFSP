<?php
$texto = $_GET['texto'];
$corFundo = $_GET['corFundo'];
$corTexto = $_GET['corTexto'];

echo "<body style='background-color:$corFundo; text-align:center;'>";
echo "<h1 style='color:$corTexto;'>$texto</h1>";
echo "</body>";
?>

<br>
<a href="index.php">Voltar</a>