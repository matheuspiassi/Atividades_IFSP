<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Impar ou Par</h2>
    <form action="parouimpar.php">
        <label for="">Número: </label>
        <input type="number" name="numero" id="">
        <input type="submit" value="Verificar">
    </form>

    <h2>Area do Quadrado</h2>
    <form action="areaquadrado.php">
        <label for="">Lado: </label>
        <input type="number" name="lado" id="">
        <input type="submit" value="Verificar">
    </form>

    <h2>Cálculo de Idade</h2>
    <form action="idade.php">
        <label for="">Insira o ano de nascimento: </label>
        <input type="number" name="ano" id="">
        <input type="submit" value="Verificar">
    </form>

    <h2>Cálculo Investimento</h2>
    <form action="investimento.php">
        <label for="">Capital: </label>
        <input type="number" name="C" id=""><br>
        <label for="">Taxa de juros: </label>
        <input type="number" name="J" id=""><br>
        <label for="">Tempo: </label>
        <input type="number" name="T" id=""><br>
        <input type="submit" value="Enviar">
    </form>

    <h2>Conferencia de Idade</h2>
    <form action="idade2.php">
        <label for="">Insira a sua idade: </label>
        <input type="number" name="idade" id="">
        <input type="submit" value="Verificar">
    </form>

     <h2>Cadastro pro clube</h2>
    <form action="clube.php">
        <label for="">Insira a sua idade: </label>
        <input type="number" name="idade" id=""><br>
        <label for="">Membro do clube? (Sim ou Nao) </label>
        <input type="text" name="membro" id=""><br>
        <label for="">Foi convidado? (Sim ou Nao) </label>
        <input type="text" name="convidado" id=""><br>
        <input type="submit" value="Verificar">
    </form>

    <h2>Analise de Velocidade</h2>
    <form action="velocidade.php">
        <label for="">Insira a velocidade do veiculo: </label>
        <input type="number" name="vVeiculo" id="">

        <label for="">Insira a velocidade da via: </label>
        <input type="number" name="vVia" id="">
        <input type="submit" value="Verificar">
    </form>
</body>
</html>