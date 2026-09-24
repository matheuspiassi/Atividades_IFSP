<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body>

<h1>Exercicios - Formularios PHP</h1>


    <legend>Exercicio 1 - Transporte</legend>
    <form action="exercicio1.php" method="get">
        <label>Digite o transporte usado (carro, moto, onibus, bicicleta, pe):
            <input type="text" name="transporte" required>
        </label>
        <input type="submit" value="Enviar">
    </form>
<br>
    <legend>Exercicio 2 - Login</legend>
    <form action="exercicio2.php" method="get">
        <label>E-mail:
            <input type="text" name="email" required>
        </label>
        <label>Senha:
            <input type="text" name="senha" required>
        </label>
        <input type="submit" value="Entrar">
        <input type="reset" value="Limpar">
    </form>
<br>
    <legend>Exercicio 3 - Camiseta</legend>
    <form action="exercicio3.php" method="get">
        <label>Tipo:</label>
        <input type="radio" name="tipo" value="masculino" required> Masculino
        <input type="radio" name="tipo" value="feminino"> Feminino
        
        <label>Tamanho:</label>
        <input type="radio" name="tamanho" value="P" required> P
        <input type="radio" name="tamanho" value="M"> M
        <input type="radio" name="tamanho" value="G"> G

        <input type="submit" value="Calcular preco">
    </form>
<br>
    <legend>Exercicio 4 - Newsletter</legend>
    <form action="exercicio4.php" method="get">
        <label>E-mail:
            <input type="text" name="email" required>
        </label>
        <label>
            <input type="checkbox" name="noticias"> Quero receber noticias
        </label>
        <label>
            <input type="checkbox" name="promocoes"> Quero receber promocoes
        </label>
        <input type="submit" value="Assinar">
    </form>
<br>
    <legend>Exercicio 5 - Texto colorido</legend>
    <form action="exercicio5.php" method="get">
        <label>Texto:
            <input type="text" name="texto" required>
        </label>
        <label>Cor de fundo:
            <input type="color" name="corFundo" value="#ffffff">
        </label>
        <label>Cor do texto:
            <input type="color" name="corTexto" value="#000000">
        </label>
        <input type="submit" value="Mostrar">
    </form>
    <br>
    
    <legend>Exercicio 6 - Camiseta 2</legend>
    <form action="exercicio6.php" method="get">
        <label>Tipo:</label>
        <input type="radio" name="tipo" value="masculino" required> Masculino
        <input type="radio" name="tipo" value="feminino"> Feminino

        <label>Tamanho:</label>
        <input type="radio" name="tamanho" value="P" required> P
        <input type="radio" name="tamanho" value="M"> M
        <input type="radio" name="tamanho" value="G"> G

        <label>Quantidade:
            <input type="number" name="quantidade" min="1" max="9" value="1" required>
        </label>

        <input type="submit" value="Calcular preco">
    </form>


<h1>Práticas - Formularios PHP</h1>

</body>
</html>