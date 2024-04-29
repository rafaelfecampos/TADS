<?php
require_once "InterfaceDAO.php";
require_once "Profissional.php";
require_once "connection/Database.php";

class ProfisionalDAO extends Profissional implements InterfaceDAO{

    public static function criar($pro)
    {
        $con = Database::getConnection();

        $sql = "INSERT INTO tads.profissao 
        (nome, email, endereco, profissao, genero, interesse, recado, promo, senha) 
        VALUES (:nome, :email, :endereco, :profissao, :genero, :interesse, :recado, :promo, :senha);";
        $stmt = $con->prepare($sql);
        $stmt->bindValue(":nome", $pro->getNome());
        $stmt->bindValue(":email", $pro->getEmail());
        $stmt->bindValue(":endereco", $pro->getEndereco());
        $stmt->bindValue(":profissao", $pro->getProfissao());
        $stmt->bindValue(":genero", $pro->getGenero());
        $stmt->bindValue(":interesse", $pro->getInteresseToString());
        $stmt->bindValue(":recado", $pro->getRecado());
        $stmt->bindValue(":promo", $pro->getPromo());
        $stmt->bindValue(":senha", $pro->getSenha());

        $stmt->execute();
    }

    public static function alterar($id, $pro)
    {
        $con = Database::getConnection();

        $sql = "UPDATE tads.profissao
        SET nome=:nome, email=:email, endereco=:endereco, profissao=:profissao, genero=:genero, interesse=:interesse, recado=:recado, promo=:promo, senha=:senha
        WHERE id=:id;";

        $stmt = $con->prepare($sql);

        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":nome", $pro->getNome());
        $stmt->bindValue(":email", $pro->getEmail());
        $stmt->bindValue(":endereco", $pro->getEndereco());
        $stmt->bindValue(":profissao", $pro->getProfissao());
        $stmt->bindValue(":genero", $pro->getGenero());
        $stmt->bindValue(":interesse", $pro->getInteresseToString());
        $stmt->bindValue(":recado", $pro->getRecado());
        $stmt->bindValue(":promo", $pro->getPromo());
        $stmt->bindValue(":senha", $pro->getSenha());

        if($stmt->execute()){
            echo "Resgistro alterado";
        }else{
            echo "error";
        }
    }

    public static function buscar($id)
    {
        $con = Database::getConnection();

        $sql = "SELECT id, nome, email, endereco, profissao, genero, interesse, recado, promo, senha
FROM tads.profissao Where id=:id;";

        $stmt = $con->prepare($sql);
        $stmt->bindValue(":id", $id);

        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Profissional");

        if($stmt->execute()){
            return $stmt->fetch();
        }else{
            echo "error";
        }

    }

    public static function buscarTodos()
    {
        $con = Database::getConnection();

        $sql = "SELECT id, nome, email, endereco, profissao, genero, interesse, recado, promo, senha
FROM tads.profissao";

        return $con->query($sql);

    }

    public static function deletar($id)
    {
        $con = Database::getConnection();

        $sql = "DELETE FROM tads.profissao Where id=:id;";

        $stmt = $con->prepare($sql);
        $stmt->bindParam(":id", $id);

        if($stmt->execute()){
            echo "<p>Registro excluido</p>";
        }else{
            echo "error";
        }
    }

}