<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <p>Nome: <?= $_POST["nome"] ?></p>
    <p>Estado Civil: <?= $_POST["estCivil"] ?></p>
    <p>Estado: <?= $_POST["selEstado"] ?></p>
    <p>Mês: <?= $_POST["selMes"] ?></p>
    <p>Os extras são: <br>
<?php
    foreach ($_POST["extras"] as $extra):
?>
    <?= $extra ?><br>
<?php
    endforeach;
?>
    <p>Usuário: <?= $_POST["id"]?></p>
    </p>
</body>
</html>