<?php
    /*
    O que são operadores?
    são simbolos que realizam operações emtre variaveis e valores.
    
    Tipos de operadores:
        - Aritimeticos
        - Atribuição 
        - Comparação
        - Logicos

        >> Aritiméticos:
        - + Adição
        - - Subtração
        - * multiplicação
        - / Divisão
        - % Modulo 
        - ** esponenciação

        >> Atribuição:
        - = Atribuição simples
        - += Atribuição de adição       
        - -= Atribuição de subtração
        - *= Atribuição de multiplicação
        - /= Atribuição de divisão
        - %= Atribuição de modulo
        - **= Atribuição de exponenciação



    */  

    // --> Operadores Aritiméticos:

    $e = 10;
    $s= 5;

    echo "A soma dos valores".($e + $s)."<br>";
    echo "A subtração dos valores".($e - $s)."<br>";
    echo "A multiplicação dos valores".($e * $s)."<br>";
    echo "A divisão dos valores".($e / $s)."<br>";
    echo "o modulo dos valores".($e % $s)."<br>";
    echo "A exponenciação dos valores".$e ** $s."<br>";

    echo "<br>";
    // --> Operadores de Atribuição:


    $a = 10;
    $b = 20;

    $a +=5;
    echo " Atribuição de adição: " .$a."<br>";
    $b -= 3;
    echo " Atribuição de subtração: ".$b."<br>";
    $a *= 2;
    echo " Atribuição de multiplicação: " .$a."<br>";
    $b /= 4;
    echo " Atribuição de divisão: ".$b."<br>";
    $a %= 3;
    echo " Atribuição de modulo: ".$a. "<br>";
    $b **= 2;
    echo " Atribuição de exponenciação: ".$b. "<br>";   

    echo "<hr>";

    /* --> Operadores de Comparação:
    - == Igual a
    - != Diferente de
    - > Maior que
    - < Menor que
    - >= Maior ou igual a
    - <= Menor ou igual a
    */

    $x = 8;
    $y = "8";
    $z = 12;

    var_dump($x == 6);
    echo "<br>";
    var_dump ($x === 6);
    echo "<br>";
    var_dump($x != 6);
    echo "<br>";
    var_dump ($x !=6);
    echo "<br>";
    var_dump($x !== 6);
    echo "<br>";
    var_dump($z > 6); 
    echo "<br>";
    var_dump ($z < 6);
    echo "<br>";
    echo "<hr>";

    /* --> Operadores Lógicos:
    - && (AND) Retorna true se ambas as condições forem verdadeiras
    - || (OR) Retorna true se pelo menos uma das condições for verdadeira
    - ! (NOT) Retorna true se a condição for falsa
    */


    $idade = 18;
    $temCarteira = true;

    if ($idade >= 18 && $temCarteira) {
        echo "Você pode dirigir";
    } else {
        echo "Você não pode dirigir";
    }

    echo "<br>";
    echo "<br>";

    $clientenovo = true;
    $temDesconto = false;

    if ($clientenovo || $temDesconto) {
        echo "Você tem direito a um desconto";
    } else {
        echo "Você não tem direito a um desconto";
    }

    echo "<br>";
    echo "<br>";

    $estachovendo = false;

    if (!$estachovendo) {
        echo " O dia esta ensolarado";
    } else {
        echo "O dia esta chuvoso";
    }

    echo "<hr>";
    echo "<br>";
    // operadores de incremento e decremento: usados para aumentar ou diminuir o valor de uma variável em 1.
    $contador = 0;
    echo "Contador: ".++$contador."<br>";
    echo "Contador: ".++$contador."<br>"; 
    echo "Contador: ".--$contador."<br>"; 
    echo "Contador: ".--$contador."<br>"; 
    


?>