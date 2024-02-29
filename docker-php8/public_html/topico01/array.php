<?php
// $precos = array();

// $precos["telefone"] = 7.89;
// $precos["biscoito"] = 1.32;


// echo "O preço do biscoito é {$precos["biscoito"]}";
// $precos = array(2 => 1.56,2.55, 0=> 5.74, 1 => 0.23, 8.96);


// $precos = array("telefone" => 900, "biscoito" => 7.89 );

// var_dump($precos);

// $precos = array(2 => 1.56,2.55, 0=> 5.74, 1 => 0.23, 8.96);
// ksort($precos);
// var_dump($precos);

// $tas = array("MD", "BH", "KK", "HM", "JP");

// for ($i=0; $i < count($tas); $i++){
//     echo "Indice {$i}: {$tas[$i]}<br>";
// }

// foreach ($tas as $key => $value){
//     echo "{$key} : {$value}<br>";
// }

//----------------------------------- aula 29/02
$dados = array(
    array(0,"João", "joao@i.br", "123456", 'm', 1),
    array(1,"Maria", "maris@i.br", "654321", 'f', 1),
    array(2,"Gabriela", "gabilimnda@i.br", "password", 'f', 1),
    array(3,"Kurt", "cobain@i.br", "teenspirit", 'm', 0),
    array(4,"James", "hetfield@i.br", "seekanddestroy", 'm', 0)
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Senha</th>
            <th>Gênero</th>
            <th>Receber E-mail?</th>
        </tr>
        <?php 
            foreach($dados as $registro):
        ?>
        <tr>
            <td><?= $registro[0] ?></td>
            <td><?= $registro[1] ?></td>
            <td><?= $registro[2] ?></td>
            <td><?= $registro[3] ?></td>
            <td><?= $registro[4] ?></td>
            <td><?= $registro[5] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>