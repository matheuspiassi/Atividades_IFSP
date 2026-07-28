<?php
$preco = (float) trim($_GET['preco']);
$quantidade = (int) trim($_GET['qtd']);
$total = $preco * $quantidade;

echo "Preço: " . $preco . "<br>";
echo "Quantidade: " . $quantidade . "<br>";
echo "Total: " . $total;
?>
