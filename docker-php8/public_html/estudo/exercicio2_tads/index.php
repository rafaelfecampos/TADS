<?php
    $alunos = array(
        array("Zeca", 1234, 10, "100%"),
        array("Juca", 4321, 10, "80%"),
        array("Pedro", 5678, 5, "50%"),
        array("Maria", 8765, 7.5, "98%"),
        array("Ana", 1010, 9.98, "75%"),
        array("Clara", 1212, 6, "60%")
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
            <th>Nome</th>
            <th>Matrícula</th>
            <th>Nota</th>
            <th>Frequência</th>
        </tr>
        <?php 
            foreach($alunos as $aluno):
        ?>
        <tr>
            <td><?= $aluno[0] ?></td>
            <td><?= $aluno[1] ?></td>
            <td><?= $aluno[2] ?></td>
            <td><?= $aluno[3] ?></td>
        </tr>
        <?php endforeach; ?>
        
    </table>
</body>
</html>