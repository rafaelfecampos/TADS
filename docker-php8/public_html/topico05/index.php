<?php

require_once "Database.php";
require_once "Aluno.php";

$db = new Database();

$con = $db->getConnection();

$nome = "Pikachu";
$matricula = 456789;

$insertSql = "INSERT INTO tads.alunos
(nome, matricula)
VALUES(:nome, :matricula);";

$stmt = $con->prepare($insertSql);

$stmt->bindValue(':nome', $nome); //bindValue guarda o valor, bindParam guarda o parametro
$stmt->bindValue(':matricula', $matricula);

if($stmt->execute()){
    echo "Registro incluido! <br>";
}


$sql = "SELECT id, nome, matricula FROM tads.alunos;";

$alunos = $con->query($sql);

$alunos->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Aluno");


echo "Quantidade de alunos: {$alunos->rowCount()}";

foreach ($alunos as $aluno) {
    $aluno->imprimeDados();
}
