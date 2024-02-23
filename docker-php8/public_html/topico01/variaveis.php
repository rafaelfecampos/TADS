<?php
    // $nome = "Rafael";
    // //$4share = "site"; variavel nao pode começar com numero
    // echo $nome; 
    // echo "<br>";
    // echo gettype($nome);

    $varA = "A";
    $varB = $varA;
    // $varB = &$varA; utiliza-se o & para passar como referencia
    $varB = "B";
    
    echo $varA;
    echo "<br>";
    echo $varB;
    echo "<br>";

    echo "Será mostrado o valor da variável: $varA";
    echo "<br>";
    echo 'Será mostrado o valor da variável: $varA';

    $var = "10";
    $numero = 12;

    echo "<br>";
    echo $var+$numero;
    echo "<br>";
    echo $var." ".$numero; //para concatenar é utilizado o .

    $texto = "12";
    $numero = (int) $texto;
    echo "<br>";
    echo gettype($texto);
    echo "<br>";
    echo gettype($numero);
    echo "<br>";

    //CONDICIONAL
    /*$varC = 4;
    if($varC > 5)
        echo "Maior que 5";
    else if($varC > 3 && $varC <5)
        echo "Menor que 5 e maior que 3";
    else{
        echo "Menor que 3";
    }
    echo "<br>";
    echo "<br>";*/

    //FOR
    /*for($i = 1; $i<= 20; $i++){
        echo "O quadrado de ".$i." é <b>".$i*$i."</b><br>";
    }

    echo "<br>";
    echo "<br>";

    //WHILE
    $i=1;
    while ($i <= 20) {
        echo "O quadrado de ".$i." é <b>".$i*$i."</b><br>";
        $i++;
    }*/

    echo "<br>";
    echo "<br>";

    //DO WHILE
    $j=1;
    do{
        echo "O quadrado de ".$j." é <b>".$j*$j."</b><br>";
        $j++;
    }while ($j <=20)

?>