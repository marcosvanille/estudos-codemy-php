<?php

<<<<<<< HEAD
require_once("config.php");


use Cliente\Cadastro1;

$cad = new Cadastro();

$cad->setNome("Djalma Sindaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();
=======
require_once ("config.php");

use Cliente\cadastro;

$cad = new cadastro();

$cad->setnome("djalma sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();
>>>>>>> ed7ccbf32a6a0f06552556f336ad33e84205e726
