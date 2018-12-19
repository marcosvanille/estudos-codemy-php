<?php

namespace Cliente;



class cadastro extends \cadastro {

    public function registrarVenda(){

        echo "foi registrada uma venda para o cliente " .$this->getNome();



    }

}