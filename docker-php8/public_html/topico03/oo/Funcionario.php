<?php
require_once "Pessoa.php";
require_once "Web.php";

class Funcionario extends Pessoa implements Web {
    private $matricula;

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
}