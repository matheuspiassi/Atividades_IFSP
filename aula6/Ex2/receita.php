<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cadastrar Receita</title>
</head>
<body>

<h1>Cadastrar Receita</h1>

<form action="salvar.php" method="post" enctype="multipart/form-data">
  Nome:
  <br>
  <input type="text" name="titulo">
  <br><br>

  Ingredientes:
  <br>
  <textarea name="itens"></textarea>
  <br><br>

  Modo de preparo:
  <br>
  <textarea name="passos"></textarea>
  <br><br>

  Foto:
  <br>
  <input type="file" name="imagem">
  <br><br>

  <input type="submit" value="Salvar">
</form>

</body>
</html>
