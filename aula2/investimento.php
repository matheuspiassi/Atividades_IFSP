<?php
 $c = $_GET['C'];
 $j = $_GET['J'] / 100;
 $t = $_GET['T'];
 
 $valor = $c * $j * $t;
 echo "Valor dos juros simples: $valor";

?>