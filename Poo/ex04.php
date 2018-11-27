<?php

//METODOS MAGICOS

class Endereco
{

    private $longradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c)
    {

        $this->longradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }


}


$meuEndereco = new Endereco("rua da paz", "123", "Paranoa");

var_dump($meuEndereco);