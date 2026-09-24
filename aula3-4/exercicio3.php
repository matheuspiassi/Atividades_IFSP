<?php
$tipo = $_GET['tipo'];
$tamanho = $_GET['tamanho'];

if ($tipo == "masculino") {
    $preco = 30;
} else {
    $preco = 25;
}

if ($tamanho == "P") {
    $preco = $preco - 5;
} elseif ($tamanho == "M") {
    $preco = $preco + 1;
} elseif ($tamanho == "G") {
    $preco = $preco + 10;
}

echo "<h1>Camiseta $tipo - Tamanho $tamanho</h1>";
echo "Valor: R$ $preco";
?>

<br><br>
<a href="index.php">Voltar</a>