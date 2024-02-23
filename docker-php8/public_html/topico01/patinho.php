<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n_patinho = 99;
        while($n_patinho>0):
    ?>
    <p><?= $n_patinho?> patinhos foram passear <br> Além das montanhas para brincar 
    <br> A mamãe gritou:
    <?php
            for ($i=$n_patinho; $i > 0; $i--) :
                echo "quá, ";
            endfor;
    ?>
         Mas só <?=(--$n_patinho)?> patinhos voltaram de lá.</p>
    <?php
        endwhile;
    ?>
        

</body>
</html>