<?php
require_once "ProfissionalDAO.php";
require_once "Profissional.php";



if(isset($_GET["excluir"])):
    ProfisionalDAO::deletar($_GET["excluir"]);
endif;

$result = ProfisionalDAO::buscarTodos();
if($result->rowCount() > 0):
?>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>Profissão</th>
            <th>Genero</th>
            <th>Interesse</th>
            <th>Recado</th>
            <th>Receber promoções</th>
            <th>Senha</th>
            <th>Excluir</th>
            <th>Alterar</th>
        </tr>
<?php
    $result->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'profissional');
    while($pro = $result->fetch()):
        imprimeLinhaTabela($pro);
    endwhile;
?>
    </table>
<?php
    else:
        echo "Nenhum registro encontrado";

endif;
function imprimeLinhaTabela($pro){
    echo "
        <tr>
            <td>{$pro->getId()}</td>
            <td>{$pro->getNome()}</td>
            <td>{$pro->getEmail()}</td>
            <td>{$pro->getEndereco()}</td>
            <td>{$pro->getProfissao()}</td>
            <td>{$pro->getGenero()}</td>
            <td>{$pro->getInteresse()}</td>
            <td>{$pro->getRecado()}</td>
            <td>{$pro->isPromo()}</td>
            <td>{$pro->getSenha()}</td>
            <td><a href=\"index.php?excluir={$pro->getId()}\">Excluir!</a></td>
            <td><a href=\"index.php?alterar={$pro->getId()}\">Atualizar!</a></td>
        </tr>  
    ";
}