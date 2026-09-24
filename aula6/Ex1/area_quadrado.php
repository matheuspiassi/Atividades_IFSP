<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $lado = $_POST['medida'];
  $area = $lado ** 2;

  echo "A area do quadrado com lados valendo <b>" . $lado . "</b> é <b>" . $area . "</b>";
  ?>
</body>
</html>
