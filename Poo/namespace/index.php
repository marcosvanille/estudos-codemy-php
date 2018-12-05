<?php

require_once ("config.php");

use Cliente\cadastro;

$cad = new cadastro();

$cad->setnome("djalma sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();