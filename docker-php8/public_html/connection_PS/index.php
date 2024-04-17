<?php

require_once 'connection/connect.php';

$db = new DataBase();

$con = $db->getConnection();




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <div class="formulario">
        <?php
            require "form.php";
        ?>   
    </div>
    <div class="recados">
        <?php
            require "recados.php";
            // require "buscar.php";
        ?>
    </div>
</body>
</html>

<?php
$db->closeConnection();