<?php

class RecadoDAO{
    public $id;
    public $nome;
    public $email;
    public $cidade;
    public $texto;

    function imprimeLinhaTabela(){
        echo "
            <tr>\n
                <td> {$this->nome} </td>\n
                <td> {$this->email} </td>\n
                <td> {$this->cidade} </td>\n
                <td> {$this->texto} </td>\n
                <td> <a href=\"index.php?excluir={$this->id}\">X</a></td>
                <td> <a href=\"index.php?alterar={$this->id}\">X</a></td>
            </tr>\n
        ";        
    }
}