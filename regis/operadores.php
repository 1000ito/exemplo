<?php
    /*
    O que são operadores?
        -São simbolos que realizam operações entre variaveis e valores. 
       * Tipos de operadores:
            - Aritméticos
            - Atribuição
            - Comparação
            - Lógicos
        >> Aritméticos:
            - + (ADIÇÃO)
            - - (SUBTRAÇÃO)
            - * (MULTIPLICAÇÃO)
            - / (DIVISÃO)
            - % (MÓDULO)
            - ** (EXPONENCIAÇÃO)

    */
    //Operadores Aritméticos:

    echo "<br>";

    $num1 = 10;
    $num2 = 5; 

    echo "A soma dos valores é = ".($num1 + $num2)."<br>";
    echo "A subtração dos valores é = ".($num1 - $num2)."<br>";
    echo "A multiplicação dos valores é = " . ($num1 * $num2) . "<br>";
    echo "A divisão dos valores é = " . ($num1 / $num2) . "<br>";
    echo "A exponenciação dos valores é = " . ($num1 ** $num2) . "<br>";
    echo "O módulo dos valores é = " . ($num1 % $num2 ). "<br>";

    echo"<br>";
    echo"<hr>";

    //Operadores de Atribuição

    $a = 10;
    $b = 20;
    
    $a += 5;
    $b -= 3;

    echo "Atribuição de adição: " . $a . "<br>" ;   
    echo "Atribuição de subtração: " . $b . "<br>";

    $a *= 2;
    $b /= 4;

    echo "Atribuição de multiplicação: " . $a . "<br>";
    echo "Atribuição de divisão: " . $b . "<br>";
    
    $a %= 5;
   
    echo "Atribuição de módulo: " . $a . "<br>";

    echo "<hr>";

    /*
        >> Comparação
            - == (igual a)
            - != (diferente de)
            - > (maior que)
            - < (menor que)
            - >= (maior igual que)
            - <= (menor igual que)
        
    */



    // Operadores de Comparação
    
    $a = 8;
    $b = "8";
    $c = 12;

    var_dump ($a == $b);
    echo "<br>";
    var_dump ($a === $b);
    echo "<br>";
    var_dump ($a != $b);
    echo "<br>";
    var_dump ($a !== $b);
    echo "<br>";
    var_dump ($a > $c) ;
    echo "<br>";
    var_dump ($a < $c);
    echo "<br>";

    echo "<hr>";

    $idade = 18;
    $temcnh = true;

    if ($idade >= 18 && $temcnh) {
        echo "Você pode dirigir";
    } else {
        echo "Você não pode dirigir";
    }

    echo "<br>";

    $clientenovo = true;
    $temcumpom = false;

    if ($clientenovo || $temcumpom ) {
        echo " Você tem disconto";
    } else {
        echo " Você não tem desconto";
    }

    echo "<br>";

    $estachovendo = false;
    
    if (!$estachovendo) {
        echo "Está ensolarado";
    } else {
        echo "Está chovendo";
    }

    echo "<hr>";



    // -> Operadores de incremento/decremnto: usados para aumentar e diminuir o valor
    //  de uma variavel numérica de um em um 

    $contador = 0;

    echo "Contador:" . ++$contador ."<br>";
    echo "Contador:" . ++$contador ."<br>";
    echo "Contador:" . --$contador ."<br>";
    echo "Contador:" . --$contador ."<br>";



 ?>   