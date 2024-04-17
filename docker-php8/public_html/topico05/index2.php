<?php
    require_once "Database.php";
    require_once "Aluno.php";
    
    $alunoAntigo = new Aluno(12,"juquinha",123456,true);
    
    $db = new Database();

    $con = $db->getConnection();

    $sql = "SELECT id, nome, matricula FROM tads.alunos WHERE id=1";

    $alunos = $con->query($sql);

    // $alunos->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Aluno");


    $alunos->setFetchMode(PDO::FETCH_INTO, $alunoAntigo);
    $alunos->execute();
    $alunos->fetch();

    var_dump($alunoAntigo);
?>
