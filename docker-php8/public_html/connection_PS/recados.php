<?php
    if(isset($_GET['excluir'])):
        $stmt = $con->prepare("DELETE FROM `recados` WHERE id=?;");
        $stmt->bind_param("i",$id);
        $id = $_GET["excluir"];
        
        
        if($stmt->execute()):
?>
    <p>Exclusao feita!</p>
<?php
        endif;
    endif;

    require_once "DAO/RecadoDAO.php";
    // $sql = "SELECT id, nome, email, cidade, recado FROM estudos.recados;";
    $stmt = $con->prepare("SELECT id, nome, email, cidade, recado FROM estudos.recados;");
    $stmt->execute();
    $stmt->store_result();

    if($stmt):
        if($stmt->num_rows>0):
?>
    <table border=1>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Cidade</th>
            <th>Recado</th>
            <th>Excluir</th>
            <th>Alterar</th>
        </tr>
<?php
    while ($obj = $stmt->get_result()->fetch_object('RecadoDAO')){
        $obj->imprimeTabela();
    }
?>
    </table>
<?php
    else:
?>
    <p>Nenhum registro encontrado</p>
<?php
        endif;
    endif;
