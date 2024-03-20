<?php
require_once "Pessoa.php";
require_once "Web.php";

class Funcionario extends Pessoa implements Web {
    public $matricula;

    public function __construct(float $salario, string $nome, int $matricula){
        parent::__construct($salario,$nome);
        $this->matricula=$matricula;
    }

    public function __destruct(){ //nao tem necesidade de chamar, ela é chamada no final apos o desuso do objeto
        echo "<p> Destruindo o objeto {$this->nome}";
    }

    public function getSalario(): float{
        return $this->salario;
    }

    public function setSalario (float $valor){
        if($valor >= 1000){
            $this->salario = $valor;
        }
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function setNome(string $nome){
        if($nome != null){
            $this->nome = $nome;
        }
    }

    function imprime(){
        echo "<p> {$this->nome}</p>";
        echo "<p> {$this->salario}</p>";
        echo "<p> {$this->matricula}</p>";
    }

    function __get($nome){
        if($nome == "identidade"){
            return $this->matricula;
        }
    }
    function __set($nome, $valor){
        // echo "Tentando colocar $valor em $nome";
        if($nome == "identidade"){
            $this->matricula = $valor;
        }
    }
    function __call($nome, $parametros) {
        if($nome == "setIdentidade"){
            $this->matricula = $parametros[0];
        }
    }
}