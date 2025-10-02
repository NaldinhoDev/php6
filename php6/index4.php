#autor: Reginaldo de Oliveira
#data 02/10/2025

<?php
//Array associativo "chave" => "valor"
$aluno = ["nome" => "Reginaldo", "idade" => 20, "cidade" => "Curitiba"];//definindo o array associativo
echo $aluno["cidade"];//acessando o valor da chave cidade
print_r($aluno);//imprimindo o array
$aluno["email"] = "reginaldo.dev@gmail.com"; //adicionando um novo elemento
print_r($aluno); //imprimindo o array atualizado



?>