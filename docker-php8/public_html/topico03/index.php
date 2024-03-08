<?php
// echo "Imprime letras: <br>";
// include("a.php");
// include("b.php");
// include("c.php");
// include("d.php"); incluem o arquivo, porém sem uma necessidade de encontrar

// require("a.php");
// require("b.php");
// require("c.php");
// require("d.php"); //obrigatoriamente o código precisa ser encontrado, caso contrário dará um erro fatal

// include_once("a.php");
// include_once("a.php");
// include_once("a.php");
// include_once("a.php");////inclue o arquivo somente uma vez

require_once("UsuarioSessao.php");
$usul = new UsuarioSessao("Juca1","Juca");

// $usul->nome = "Juca";
// $usul->login = "Juca1";

$usul-> salvar();
$usul-> ler();

var_dump($usul);