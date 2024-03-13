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

// require_once("UsuarioSessao.php");
// require("UsuarioSessaoPermissao.php")
// $usu1 = new UsuarioSessao("Juca1","Juca");
// $usu2 = new UsuarioSessao("Zezin","Ze");
// $usu3 = new UsuarioSessaoPermissao("Pedrin","Pedro")

// // $usul->nome = "Juca";
// // $usul->login = "Juca1";

// // $usul-> salvar("Jucalol");
// // $usul-> ler();


// echo $usu1->nome;

// $nome = "<br>Huguinho";
// $atributo = "nome";

// echo $$atributo;

// var_dump($usu1);

require_once("UsuarioSessao.php");
require_once("UsuarioSessaoPermissao.php");

$usu1 = new UsuarioSessao("Pedro", "Pe");
$usu2 = new UsuarioSessaoPermissao("Juca", "Ju", 10);

var_dump($usu1);
