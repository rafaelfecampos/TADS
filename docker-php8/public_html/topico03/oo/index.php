<?php

spl_autoload_register(function ($classe){
    echo "<p> {$classe}</p>";
    require_once str_replace('\\','/',$classe).'.php';
});

use Seguranca\Conta as ContaS;
use Financas\Conta as ContaF;

$func1 = new Funcionario(2000,"Juquinha", 123);
$func2 = new Funcionario(2000,"Marizinha", 456);
$dep = new Departamento();

$dep->addFuncionario($func1);
$dep->addFuncionario($func2);

$func1->setIdentidade(789);

var_dump($func1);

$contaF = new ContaF();
$contaS = new ContaS();