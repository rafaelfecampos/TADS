<?php
    require_once "DAO/RecadoDAO.php";

    if(isset($_GET["alterar"])):
        $id = $_GET["alterar"];
        $sql = "SELECT `id`, `nome`, `email`, `cidade`, `recado` FROM `recados` WHERE id = {$id}";
        $result = $con->query($sql);
        if($result):
            if($result->num_rows > 0):
                $obj = $result->fetch_object('RecadoDAO');
            endif;
        endif;
    endif;
?>


<form action="<?= isset($obj->id)?"?atualizar=$obj->id":""?>" method="post">
    <table>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" id="nome" value="<?= $obj->nome??'' ?>"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" id="email" value="<?= $obj->email??'' ?>"></td>
        </tr>
        <tr>
            <td>Cidade:</td>
            <td><input type="text" name="cidade" id="cidade" value="<?= $obj->cidade??'' ?>"></td>
        </tr>
        <tr>
            <td>Recado:</td>
            <td><textarea name="recado" id="recado" cols="21" rows="5"><?= $obj->recado??'' ?></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="<?= isset($obj->id)?"Atualizar":"Cadastrar" ?>" name="enviar"></td>
        </tr>
    </table>
</form>

<?php
    if(isset($_POST["enviar"])):
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cidade = $_POST["cidade"];
        $recado = $_POST["recado"];

        if($_POST["enviar"] == "Cadastrar"):
            $sql = "INSERT INTO estudos.recados (nome, email, cidade, recado) VALUES ('{$nome}','{$email}','{$cidade}','{$recado}');";
        elseif ($_POST["enviar"] == "Atualizar"):
            $id = $_GET["atualizar"];
            $sql = "UPDATE `recados` SET nome='{$nome}',email='{$email}',cidade='{$cidade}',recado='{$recado}' WHERE id = {$id};";

        endif;

        $con->query($sql);
    endif;
    
