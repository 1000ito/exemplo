<?php
    /*
    O QUE SÃO OPERADORES?
        - São simbolos que realizam operações entre variaveis e valores.
        *TIPOS DE OPERADORES:
            - Aritmeticos
            - Atribuição
            - Comparação
            - Lógicos

            >> Aritmeticos:
                - + (adição)
                - - (subtração)
                - * (multiplicação)
                - / (divisão)
                - % (módulo)
                - ** (exponenciação)

    */
// --> Operadores Aritmeticos 

$num1 = 10;
$num2 = 5;

echo "soma: " . ($num1 + $num2) . "<br>";
echo "subtração: " . ($num1 - $num2) . "<br>";
echo "multiplicação: " . ($num1 - $num2) . "<br>";
echo "divisão: " . ($num1 * $num2) . "<br>";
echo "módulo: " . ($num1 % $num2) . "<br>";
echo "exponenciação: " . ($num1 ** $num2) . "<br><hr>";

//...

echo "<br>";

// --> Operadores de Atribuição:
$a = 10;
$b = 20;

$a += 5;
$b -= 3;
$a *= 2;
$b /= 4;
$a %= 3;

echo "O valor de A é: " . $a . "<br>";
echo "O valor de A é: " . $b . "<br><hr>";

//...
/*
     --> Comparação:
        - == (igual a)
        - != (diferente de)
        - > (maior que)
        - < (menor que)
        - >= (maior que ou igual a)
        - <= (menor ou igual a)
*/
$a = 8;
$b = "8";
$c = 12;

var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);
var_dump($a > $c);
var_dump($a < $c);

echo "<br><hr>";

//...
/* 

    --> Lógico:
    E (AND - && ou &): Retorna verdadeiro apenas se todas as condições forem verdadeiras. Se uma for falsa, o resultado é falso.
    OU (OR - || ou |): Retorna verdadeiro se pelo menos uma das condições for verdadeira. Só é falso se todas forem falsas.
    NÃO (NOT - !): Operador unário que inverte o valor lógico. Se for verdadeiro, torna falso; se for falso, torna verdadeiro.

*/

$idade = 17;
$temcnh = true;

if ($idade >= 18 && $temcnh) {
    echo "Pode dirigir";
} else {
    echo "Não pode dirigir";
}  

echo "<br>";

$temcupom = true;
$clientenovo = true;

if ($temcupom OR $clientenovo) {
    echo "Tem direito a um cupom de desconto";
} else {
    echo "Não tem direito a um cupom de desconto";
}

echo "<br>";

$estachovendo = false;

if (!$estachovendo) {
    echo "Está ensolarado";
} else {
    echo "Está chovendo";
}

echo "<hr>";

// -> Operadores de incremento e decremento: usados para aumentar ou diminuir o valor de uma variavel numerica em 1.


$contador = 0;
echo ++$contador; 
echo "<br>";

echo ++$contador;
echo "<br>";

$contador = 0;
echo ++$contador;
echo "<br>";

$contador = 0;
echo $contador++;



?>