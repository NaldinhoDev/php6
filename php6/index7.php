#autor Reginaldo de Oliveira
#data 02/10/2025


<?php
$aluno = [ //definindo o array multidimensional
    ["nome" => "Reginaldo", "idade" => 20, "cidade" => "Curitiba"
    ],
    [
        "nome" => "Maria", "idade" => 22, "cidade" => "São Paulo"
    ],
    [
        "nome" => "João", "idade" => 19, "cidade" => "Rio de Janeiro"
    ]
    ]; //definindo o array multidimensional
print_r($aluno); //imprimindo o array
$aluno[] = ["nome" => "Ana", "idade" => 21, "cidade" => "Belo Horizonte"]; //adicionando um novo aluno
print_r($aluno);//adicionando um novo aluno
$aluno[1]["idade"] = 23; //alterando a idade de Maria

print_r($aluno);


?>