<?php

//Herança

class Documento {

    private $numero;

    public function getNumero()
    {


       return $this->numero;
    }

    public function setNumero($n)
    {

        $this->numero = $n;

    }

}

class CPF extends Documento{

    public function validar():bool

    {
        $numeroCPF = $this->getNumero();

        //Validaçao do CPF

        return true;


    }


}

$doc = new CPF();
$doc->setNumero("11122233344-555");
$doc->validar();

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();
