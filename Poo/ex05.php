<?php
  //ENCAPSULAMENTO

class Pessoa{

    public $nome = "Rasmus Leodorf";
    protected $idade = 48;
    private $senha = "123456";


    public function verDados(){

        echo $this->nome  . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }


}

class Programador extends Pessoa{

    public function verDados(){

        echo get_class($this). "<br>"; // get_class e para saber  qual classe esta chamando verDados

        echo $this->nome  . "<br/>";
        echo $this->idade . "<br/>";
//        echo $this->senha . "<br/>";

    }

}

$objeto = new Programador();

//echo $objeto-> senha. "<br>";


$objeto->verDados();
