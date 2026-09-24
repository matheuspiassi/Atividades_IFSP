<?php
$email = trim($_GET['email']);
$senha = trim($_GET['senha']);

if ($email == "fulano@email.com" && $senha == "1234Thanos") {
    echo "<h1>Login correto!</h1>";
} else {
    echo "<h1>E-mail ou senha incorretos.</h1>";
}
?>

<br>
<a href="index.php">Voltar</a>