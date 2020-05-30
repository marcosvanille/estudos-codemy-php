<?php

class Pessoa { //Classe Pessoa

  public $nome;  //Atributo


public function falar(){//Metodo
//Dentro do metodo para referenciar
// atributos e metodos precisa usar  o $this
    return "O meu nome e ".$this->nome; ////o return so irá ser usado quando esta devolvendo o atributo para ser exibido ou manipulado pelo objeto ,que nada mais e oque estancia a classe
}

}

$glaucio = new Pessoa(); //Aqui e Um objeto que representa uma classe ,aqui esta instaciando a classe pessoa
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();


