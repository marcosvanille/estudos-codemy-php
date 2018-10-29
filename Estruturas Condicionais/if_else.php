<?php

$qualSuaIdade = 68;

$idadeCriança = 12;
$idadeMaior = 18;
$idadeMelhor = 65 ;

if($qualSuaIdade < $idadeCriança ){

    echo "criança";

} else if ($qualSuaIdade < $idadeMaior){

    echo "adolescente";

} else if ($qualSuaIdade < $idadeMelhor){

    echo "adulto";

} else{

    echo"idoso";
}
