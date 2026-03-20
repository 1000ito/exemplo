<?php
/*
    O QUE SÃO OPERADORES?
     - São símbolos que realizam operações entre varíaveis e valores.
    TIPOS DE OPEREADORES:
     - Aritméticos
     - Atribuição
     - Comparação
     - Lógicos

    >> Aritméticos:
    - + (adição)
    - - (subtração)
    - * (multiplicação)
    - / (divisão)
    - % (módulo)
    - ** (exponeciação)
 */

    $num1 = 10;
    $num2 = 5;

    echo "Soma: ". ($num1 + $num2). "<br>";
    echo "Subtração: ". ($num1 - $num2). "<br>";
    echo "Multiplicação: ". ($num1 * $num2). "<br>";
    echo "Divisão: ". ($num1 / $num2). "<br>";
    echo "Módulo: ". ($num1 % $num2). "<br>";
    echo "Exponenciação: ". ($num1 ** $num2). "<br>";

    echo "<br>";

    // --> Operadores de atribuição:

    $a = 10;
    $b = 20;

    $a += 5; // 15
    $b -= 3; //17

    $a *= 2; //30
    $b /= 4;

    echo "<hr>";

    /* Comparação:
        - == (igual a)
        - != (diferente de)
        - > (maior que)
        - < (menor que)
        - >=  (maior ou igual a)
        - <= (menor ou igual a)
    */

    $a = 8;
    $b = "8";
    $c = 12;

    var_dump($a == $b); //true
    var_dump($a === $b); //false
    var_dump($a != $b); //false
    var_dump($a !== $b); //true
    var_dump ($a > $c); //false
    var_dump($a < $c);//true

    echo "<hr>";
    
    $idade = 30;
    $temCNH = true;

    if ($idade >= 18 && $temCNH == true) {
        echo "Está habilitado para dirigir!";
    } else {
        echo "Não está habilitado para dirigir.";
    }

    echo "<hr>";

    $clienteNovo = true;
    $temCupom = false;


    if ($clienteNovo OR $temCupom) {
        echo "Você ganhou desconto!";
    } else {
        echo "Você não ganhou desconto!";
    }

    echo "<hr>";

    $estachovendo = false;

    if (! $estachovendo) {
        echo "Está ensolarado."; 
    } else {
        echo "Está chovendo.";
    }

    echo "<hr>";

    // ->1 2 1 e 0 Operadores de incremento?deceremento: usados para aumentar ou diminuir o valor de uma variavel numerica em 1.
    
    $contador = 0; 

    $contador++;
        echo $contador . "<br>";

    $contador++;
        echo $contador . "<br>";

    $contador--;
        echo $contador . "<br>";

    $contador--;
        echo $contador;
        
     echo "<hr>";

?>
