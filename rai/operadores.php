<?php
    /*
    Oque são operadores ?
    - são simbolos que realizam operações entre variavies e valores.
    
    *tipos de operadores:
        -aritmeticos
        -atribuição
        -comparação
        -logicos

    >> aritmeticos:
        -+ (adição)
        -- (subtração)
        -* (multiplição)
        -/ (divisão)
        -% (módulo)
        -** (exponeciação)

    */
        echo "<br>";

$a = 10;
$b = 5;


$adição = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;
$modulo = $a % $b;
$exponeciação = $a ** $b;

echo "adição: $a + $b = $adição <br>";
echo "Subtração: $a - $b = $subtracao <br>";
echo "Multiplicação: $a * $b = $multiplicacao <br>";
echo "Divisão: $a / $b = $divisao <br>";
echo "modulo: $a % $b = $modulo <br>";
echo "exponeciação: $a ** $b = $exponeciação <br>";

echo "<br>";

$a = 10;
$b = 20;

$a += 5;
$b -= 3;

$a *= 2;
$b /= 4;

$a %= 3;


echo "Valor de a: $a <br>";
echo "Valor de b: $b <br>";

echo "<hr>";
echo "<br>";


/*
>> operadores de comparação:
    - == (igual a)
    - != (diferente de)
    - > (maior que)
    - < (menor que)
    - >= (maior ou igual a)
    - <= (menor ou igual a)

*/

$a = 8;
$b = "8";
$c = 12;
var_dump ($a == $b);
var_dump ($a === $b);
var_dump ($a != $b);
var_dump ($a !== $b);
var_dump ($a > $c);
var_dump ($a < $a);

echo "<hr>";
echo "<br>";


/* valores boleanos = true or false */

$idade = 18;
$temcarteira = false;

if ($idade >= 18 && $temcarteira) {
    echo "pode dirigir";
} else {
    echo "não pode dirigir";
}

echo "<hr>";
echo "<br>";



$temDesconto = false;
$EclienteNovo = true;

if ($temDesconto || $EclienteNovo) {
    echo "cara tem desconto.";
} else {
    echo "esse cara não tem desconto.";
}

echo "<hr>";
echo "<br>";

$estaChovendo =  false;

if(!$estaChovendo) {
    echo "esta ensolarado";
} else {
    echo "esta chovendo";
}

echo "<hr>";

 /* Operadores de incremento/decremento: usados para aumentar ou diminuir o valor de uma variável numerica em 1 */


$contador = 0;

$contador++;
echo $contador . "<br>";

$contador++;
echo $contador . "<br>";

$contador--;
echo $contador . "<br>";

$contador--;
echo $contador . "<br>"; 

?>