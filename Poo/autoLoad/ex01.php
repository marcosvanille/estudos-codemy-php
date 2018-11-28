<?php

 function__autoload($nomeClasse){

    var_dump($nomeClasse);
    require_once("$nomeClasse.php");


}




$carro = new Delrey();

$carro->acelerar(80);