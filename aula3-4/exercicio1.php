<?php
$transporte = strtolower(trim($_GET['transporte']));

echo "<h1>Transporte digitado: $transporte</h1>";

if ($transporte == "carro") {
    echo "<img src='imagem/carro.png' width='200'>";
} elseif ($transporte == "moto") {
    echo "<img src='imagem/moto.png' width='200'>";
} elseif ($transporte == "onibus") {
    echo "<img src='imagem/onibus.png' width='200'>";
} elseif ($transporte == "bicicleta") {
    echo "<img src='imagem/bike.png' width='200'>";
} elseif ($transporte == "pe") {
    echo "<img src='imagem/pé.png' width='200'>";
} else {
    echo "Transporte nao reconhecido.";
}
?>

<br><br>
<a href="index.php">Voltar</a>