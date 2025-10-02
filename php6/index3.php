#autor: Reginaldo de Oliveira
#data 02/10/2025

<?php

$planetas = array("Mercúrio", "Vênus", "Terra", "Marte");

echo"Qual planeta quer localizar? ";
$busca = trim(fgets(STDIN));

for($i = 0; $i < count($planetas); $i++) {
    if($planetas[$i] == $busca)
    echo"o planeta desejado esta na lista\n";

}

?>