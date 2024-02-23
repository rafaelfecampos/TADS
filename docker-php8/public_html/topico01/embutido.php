<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .blue{
            color:blue;
        }
    </style>
</head>
<body>
    <div class="principal">
        <h1>Quadrados</h1>
        <p>
<?php
            $j=1;
            while ($j <=20):
?>  
        <p>O quadrado de <?=$j?> " é <b><?=$j*$j?></b><br>
<?php    $j++;
            endwhile;

            $nome = "Rafael";
            $sobrenome = "Campos";
            echo "<br>";
            // echo "\n<h2 class= 'blue'> $nome $sobrenome </h2>\n"; <?= é a mesma coisa que <?php echo
?>
        <h2 class="blue"><?= "$nome $sobrenome"; ?></h2> 
        </p>
    </div>
</body>
</html>