<?php
require_once "connection/Database.php";
$con= Database::getConnection();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <?php
            require_once "form.php";
        ?>
    </div>
    <br>
    <div class="table">
        <?php
            require_once "tabela.php";
        ?>
    </div>
    <br>
    <div class="buscar">
        <?php
            require_once "buscar.php";
        ?>
    </div>
</body>
</html>

<?php
Database::closeConnection();