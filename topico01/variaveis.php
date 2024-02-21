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
    $varC = 4;
    if($varC > 5)
        echo "Maior que 5";
    else if($varC > 3 && $varC <5)
        echo "Menor que 5 e maior que 3";
    else{
        echo "Menor que 3";
    }

    //FOR
    for($i = 0; $i<= 20; $i++){
        echo "O quadrado de ".$i." é ".$i*$i."<br>";
    }

?>