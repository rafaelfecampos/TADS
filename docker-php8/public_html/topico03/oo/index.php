<?php

// require_once("Funcionario.php");
// require_once "Departamento.php";
// require_once("./Financas/Conta.php");
// require_once("./Seguranca/Conta.php");

spl_autoload_register(function ($classe){
    require_once str_replace('\\','/',$classe).'php';
});

use Seguranca\Conta as ContaS;
use Financas\Conta as ContaF;

$func1 = new Funcionario(2000,"Juquinha", 123);
$func2 = new Funcionario(2000,"Marizinha", 456);
$dep = new Departamento();

$dep->addFuncionario($func1);
$dep->addFuncionario($func2);


// echo $dep->getFuncionario(0)->imprime();
// echo $dep->getFuncionario(1)->imprime();

// echo "<p>Identificador do departamento: ".Departamento::IDENTIFICADOR;
// echo "<br>Número de funcionários: ".Departamento::$quantidade."</p>";

// var_dump($dep->getFuncionarios(0));

// echo $func1->imprime()."<br>";

// // echo $func1->identidade = 789;

// echo "<br>";

$func1->setIdentidade(789);

var_dump($func1);

// $seguranca = new Seguranca\Conta();
// $financas = new Financas\Conta();

$contaF = new ContaF();
$contaS = new ContaS();