<?php
 $vVeiculo = $_GET['vVeiculo'];
 $vVia = $_GET['vVia'];
 
 if($vVeiculo > $vVia)
    echo "Gerar Multa";

 if($vVeiculo <= $vVia)
    echo "Direção Segura";

?>