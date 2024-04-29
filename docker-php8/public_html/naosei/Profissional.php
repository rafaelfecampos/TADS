<?php
class Profissional
{
    private $id;
    private $nome;
    private $email;
    private $endereco;
    private $profissao;
    private $genero;
    private $interesse;
    private $recado;
    private $promo = false;
    private $senha;

    public function __construct()
    {
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getProfissao()
    {
        return $this->profissao;
    }

    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;
    }


    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    public function getInteresseToString()
    {
        return implode(", ", $this->interesse);
    }

    public function getInteresseToArray()
    {
        return explode(", ", $this->interesse);
    }

    public function getInteresse()
    {
        return $this->interesse;
    }

    public function setInteresse($interesse)
    {
        $this->interesse = $interesse;
    }

    public function getRecado()
    {
        return $this->recado;
    }

    public function setRecado($recado)
    {
        $this->recado = $recado;
    }

    public function getPromo()
    {
        if ($this->promo == true) {
            return 1;
        } else {
            return 0;
        }
    }

    public function isPromo()
    {
        if ($this->getPromo() == 1) {
            return "Sim";
        } else {
            return "Não";
        }
    }

    public function setPromo($promo)
    {
        $this->promo = $promo;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function isChecked($item)
    {
        $array = $this->getInteresseToArray();
        foreach ($array as $valor){
            if($valor == $item){
                echo "checked";
            }
        }
    }
}