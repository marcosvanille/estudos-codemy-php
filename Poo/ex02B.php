<?php

class CarroEsportivo
{

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo()
    {

        return $this->modelo;

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

    public function getAno(){
        return $this->ano;
    }

    public function setAno($ano1){
        return $this->ano = $ano1;
    }

    public function exibir(){
         return  [
            "modelo" => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno()
         ];
    }

}

$carro = new CarroEsportivo();


$carro->setModelo('Nissan');
$carro->setMotor('2.0');
$carro->setAno('2018');


var_dump($carro->exibir());
?>
