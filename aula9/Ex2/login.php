<?php
session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "site";

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

$n = $_GET['nome'];
$e = $_GET['email'];
$comando = "SELECT `nome` FROM `usuarios` WHERE `nome` = '$n' AND `email` = '$e'";

$stm = $conexao->prepare($comando);
$stm->execute();

if($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {
    $_SESSION['nome'] = $resultado['nome'];
    echo "Login realizado!<br>";
    echo "<a href='pagina.php'>Ir para a página</a>";
} else {
    echo "Nome ou email incorretos!<br>";
    echo "<a href='index.php'>Tentar novamente</a>";
}

$conexao = null;
?>
