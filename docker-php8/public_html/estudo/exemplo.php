<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Seu nome é <?=$_REQUEST["txtNome"]?></p>
    <p>Seu estado civil é: <?=$_REQUEST["estCivil"]?></p>
    <p>O estado selecionado foi <?=$_REQUEST["selEstado"]?></p>
    <p>Os extras selecionados foram:<br>
    <?php
        $extras = $_REQUEST["extras"];
        foreach ($extras as $extra) {
            print ("$extra<BR>\n");
        };
    ?>
    </p>
</body>
</html>