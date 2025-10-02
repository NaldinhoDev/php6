#autor: Reginaldo de Oliveira
#data 02/10/2025


<?php

$frutas = array("maçã", "banana", "laranja", "uva");

echo $frutas[0]. PHP_EOL; // maçã
echo $frutas[1]. PHP_EOL; // banana     
echo $frutas[2]. PHP_EOL; // laranja
echo $frutas[3]. PHP_EOL; // uva

$frutas[] = "abacaxi"; // adiciona "abacaxi" ao final do array
echo $frutas[4]. PHP_EOL; // abacaxi    
print_r($frutas); // imprime todo o array

echo"qual voce deseja alterar? ";
$item = trim(fgets(STDIN));
unset($frutas[$item]); // remove o item selecionado do array
print_r($frutas); // imprime todo o array atualizado





?>