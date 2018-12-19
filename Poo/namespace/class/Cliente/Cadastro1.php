<?php

namespace Cliente;

class Cadastro1 extends \Cadastro {

    public function registrarVenda(){

        echo "Foi registrada uma venda para o cliente ".$this->getNome();
    }



}
