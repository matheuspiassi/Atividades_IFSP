<?php
$tipo = $_GET['tipo'];
$tamanho = $_GET['tamanho'];
$quantidade = $_GET['quantidade'];

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
    $preco = $preco - 10;
}

$desconto = $quantidade * 3;

$precoTotal = $preco * $quantidade;
$valorDesconto = $precoTotal * ($desconto / 100);
$precoFinal = $precoTotal - $valorDesconto;

echo "<h1>Camiseta $tipo - Tamanho $tamanho</h1>";
echo "Quantidade: $quantidade <br>";
echo "Preco unitario: R$ $preco <br>";
echo "Preco total (sem desconto): R$ $precoTotal <br>";
echo "Desconto: $desconto% <br>";
echo "Preco final: R$ $precoFinal";
?>

<br><br>
<a href="index.php">Voltar</a>