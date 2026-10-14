<?php
session_start();

if(isset($_SESSION['nome'])) {
    echo "Olá, " . $_SESSION['nome'] . "!";
} else {
    echo "Você não está logado. <a href='index.php'>Acesse a página de login</a>";
}
?>
