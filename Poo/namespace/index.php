<?php

require_once("config.php");


use Cliente\Cadastro1;

$cad = new Cadastro();

$cad->setNome("Djalma Sindaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();
