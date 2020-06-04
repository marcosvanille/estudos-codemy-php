<?php

//GETTER E SETTER

class  carro
{

    private $modelo;
    private $motor;
    private $ano;


    public function getModelo()
    {
        return $this->modelo; //o return so irá ser usado quando esta devolvendo o atributo para ser exibido ou manipulado pelo objeto ,que nada mais e oque estancia a classe
    }


    public function setModelo($modelo1)
    {
        $this->modelo = $modelo1;
    }


    public function getMotor()
    {
        return $this->motor;
    }

    public function setMotor($motor1)
    {
        $this->motor = $motor1;
    }

    function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano1)
    {
        $this->ano = $ano1;
    }

    public function exibir()
    {
        return [
             $this->getModelo(),
            $this->getMotor(),
          $this->getAno()
        ];
    }
}


$gol = new carro();
$gol->setMotor("1.6");
$gol->setModelo("Gol GTI ");
$gol->setAno("2017");


var_dump($gol->exibir());











