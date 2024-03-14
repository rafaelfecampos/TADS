<?php

require_once("Funcionario.php");
require_once "Departamento.php";

$func1 = new Funcionario(2000,"Juquinha", 123);
$func2 = new Funcionario(2000,"Marizinha", 456);
$dep = new Departamento();

$dep->addFuncionario($func1);
$dep->addFuncionario($func2);


echo $dep->getFuncionario(0)->imprime();
echo $dep->getFuncionario(1)->imprime();

echo "<p>Identificador do departamento: ".Departamento::IDENTIFICADOR;
echo "<br>Número de funcionários: ".Departamento::$quantidade."</p>";