<?php
$email = trim($_GET['email']);
$noticias = isset($_GET['noticias']);
$promocoes = isset($_GET['promocoes']);

if (!$noticias && !$promocoes) {
    echo "<h1>Assinatura recusada!</h1>";
} else {
    echo "<h1>Resumo da Inscricao</h1>";
    echo "E-mail: $email <br>";

    if ($noticias) {
        echo "Receber noticias: Sim <br>";
    } else {
        echo "Receber noticias: Nao <br>";
    }

    if ($promocoes) {
        echo "Receber promocoes: Sim <br>";
    } else {
        echo "Receber promocoes: Nao <br>";
    }
}
?>

<br>
<a href="index.php">Voltar</a>