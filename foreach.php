<?php
//foreach com listagem de arrays



$aluno = [
    "nome" => "marcos",
    "idade" => "22",
    "estado" => "df",
    "pais" => "brasil"
];
foreach ($aluno as $chave => $dado){

    echo $chave. " = " . $dado .   "<br>";

}