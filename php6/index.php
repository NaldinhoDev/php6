#autor: Reginaldo de Oliveira
#data 02/10/2025


<?php

$cores = array("vermelho", "verde", "azul", "amarelo");

ECHO $cores[0]. PHP_EOL; // vermelho
ECHO $cores[1]. PHP_EOL; // verde
ECHO $cores[2]. PHP_EOL; // azul
ECHO $cores[3]. PHP_EOL; // amarelo  "

$cores[] = "roxo"; // adiciona "roxo" ao final do array
ECHO $cores[4]. PHP_EOL; // roxo  
print_r($cores); // imprime todo o array

echo"qual a nova cor deseja incluir? ";
$nova_cor = trim(fgets(STDIN));
$cores[] = $nova_cor; // adiciona a nova cor ao final do array  
print_r($cores); // imprime todo o array com a nova cor incluída



?>