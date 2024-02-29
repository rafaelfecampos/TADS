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
        $ntotal_patinho = $n_patinho;
        while($n_patinho>0):
    ?>
    <p><?= $n_patinho?> patinhos foram passear <br> Além das montanhas para brincar 
    <br> A mamãe gritou:
    <?php
            for ($i=$n_patinho; $i > 0; $i--) :
                echo "quá, ";
            endfor;
    ?>
        <?php
        if(--$n_patinho>0)
            echo "<br>Mas só ".$n_patinho." patinhos voltaram de lá";
        else{
            echo "<br>Mas nenhum patinho voltou de lá";}?>
    <?php
        endwhile;
    ?>
    <p>A mamãe patinha foi procurar<br>
        Além das montanhas<br>
        Na beira do mar<br>
        A mamãe gritou:
        <?php while($n_patinho<$ntotal_patinho):?>
        quá
        <?php $n_patinho++;
        endwhile;?>
        <br>
        E os cinco patinhos voltaram de lá</p>
        

</body>
</html>