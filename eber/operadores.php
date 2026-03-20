<?php
    /*  
        O que são operadores?
        --São simbolos que realizam operações entre variaveis e valores.

        Tipos de Operadores:
            - Aritiméticos
            - Atribuição
            - Comparação
            - Lógicos

            >> aritiméticos
                + adição
                - subtração
                * multiplicação
                / divisão
                % modulo
                ** exponenciação

            >> Atribuição
                = atribuição
                += atribuição de adição
                -= atribuição de subtração
                *= atribuição de multiplicação
                /= atribuição de divisão
                %= atribuição de modulo
                **= atribuição de exponenciação

            >> Comparação
                == igual a
                === idêntico a
                != diferente de
                !== não idêntico a
                > maior que
                < menor que
                >= maior ou igual a
                <= menor ou igual a
                
            >> Lógicos
                && e
                || ou
                ! negação
    */

    $num1 = 10;
    $num2 = 5;
    $soma = $num1 + $num2;
    echo "soma ".$soma;

    echo "<br>";
    $subtracao = $num1 - $num2;
    echo "Subtração = ".$subtracao;

    echo "<br>";
    $multiplicacao =  $num1 * $num2;
    echo "Multiplicação = ".$multiplicacao;

    echo "<br>";
    $divisao = $num1 / $num2;
    echo "Divisão = ".$divisao;

    echo "<br>";
    $modulo = $num1 % $num2;
    echo "Modulo = ".$modulo;

    echo "<br>";
    $exponenciacao = $num1 ** $num2;
    echo "Exponeciação = ".$exponenciacao;

    echo "<hr>";

    //Operadores de Atribuição
    $a = 10;
    $b = 20;

    $a += 5;
    echo "Atribuição de Soma = ".$a."<br>";

    $b -= 3;
    echo "Atribuição de subtração = ".$b."<br>";

    $a *= 2;
    echo "Atribuição de multiplicação = ".$a."<br>";

    $b /= 4;
    echo "Atribuição de divisão = ".$b."<br>";
    echo "<hr>";

    //Operadores de comparação
    $x = 8;
    $y = "8";
    $z = 12;

    var_dump($x == $y);
    echo "<br>";
    var_dump($x === $y);
    echo "<br>";
    var_dump($x != $y);
    echo "<br>";
    var_dump($x !== $y);
    echo "<br>";
    var_dump($x > $z);
    echo "<br>";
    var_dump($x < $z);

    echo "<hr>";

    $idade = 17;
    $temCNH = true;
    if($idade >= 18 && $temCNH){
        echo "Pode dirigir";
    }else{
        echo "Não pode dirigir";
    }

    echo "<br>";

    $temCupom = false;
    $clienteNovo = true;
    if($temCupom || $clienteNovo){
        echo "Tem esconto <br>";
    }else{
        echo "Não tem esconto <br>";
    }

    $estaChovendo = false;
    if(!$estaChovendo){
        echo "Ensolarado<br>";
    } else{
        echo "Está chovendo<br>";
    }

    echo "<hr>";
    //>> Incremento e Decremento: Usados para aumentar ou diminuir o valor de uma variável em 1.
    $contador = 0;

    echo "Contador: ".++$contador."<br>";
    echo "Contador: ".++$contador."<br>";
    echo "Contador: ".--$contador."<br>"; 
    echo "Contador: ".--$contador."<br>";
?>