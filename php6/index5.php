#autor: Reginaldo de Oliveira
#data 02/10/2025

<?php
//Array associativo "chave" => "valor"
$aluno = ["nome" => "Reginaldo", "idade" => 20, "cidade" => "Curitiba"];//definindo o array associativo
foreach($aluno as $chave => $valor) { //percorrendo o array
    echo "A chave é: $chave e o valor é: $valor\n"; //imprimindo chave e valor
}

?>