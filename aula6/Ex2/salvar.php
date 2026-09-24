<?php
$titulo = $_POST["titulo"];
$itens = $_POST["itens"];
$passos = $_POST["passos"];
$imagem = $_FILES["imagem"]["name"];

move_uploaded_file($_FILES["imagem"]["tmp_name"], "imagens/" . $imagem);

$conteudo = "# " . $titulo . "\n\n" .
            "![Foto](imagens/" . $imagem . ")\n\n" .
            "## Ingredientes\n" .
            $itens . "\n\n" .
            "## Modo de preparo\n" .
            $passos . "\n\n" .
            "---\n";

file_put_contents("receita.md", $conteudo, FILE_APPEND);

echo "Receita salva!";
echo "<br><a href='mostrar.php'>Ver receita</a>";
