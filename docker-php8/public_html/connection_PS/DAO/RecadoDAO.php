<?php

class RecadoDAO{
    public $id;
    public $nome;
    public $email;
    public $cidade;
    public $recado;

    function imprimeTabela(){
        echo "
            <tr>
            <td> {$this->nome} </td>
            <td> {$this->email} </td>
            <td> {$this->cidade} </td>
            <td> {$this->recado} </td>
            <td> <a href=\"index.php?excluir={$this->id}\">Clique aqui!</td>
            <td> <a href=\"index.php?alterar={$this->id}\">Clique aqui!</td>
            </tr>\n
        ";
    }
}