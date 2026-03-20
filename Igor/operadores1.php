<?php
   /* 
     O QUE SÃO OPERADORES?
     -São simbolos que realizam operações entre variavéis e valores.

     TIPOS DE OPERADORES:
     -Aritméticos
     -Atribuição
     -Comparação
     -logicos

     >> Aritméticos:
        -+ (adição)
        -- (subtração)
        -* (multiplicação)
        -/ (divisão)
        -% (módulo)
        -** (exponenciação)
   */
  echo "<hr>";

  $a = 10;
  $b = 5;

  $soma = $a + $b; 
  $subtracao = $a - $b;
  $divisao = $a / $b;
  $multiplicação = $a * $b;
  $resto = $a % $b;

echo "Variáveis: a = $a, b = $b <br>";
echo "Soma: $soma <br>";
echo "Subtração: $subtracao <br>";
echo "Multiplicação: $multiplicação <br>";
echo "Divisão: $divisao <br>";
echo "Resto: $resto";

 echo "<br>";

 $a = 10;
 $b = 20;
 $a += 5;
 $b -= 3;
 $a *= 4;
 

$soma = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;
$modulo = $a % $b;
$exponenciacao = $a ** 2;

// Exibindo resultados
echo "Valor de E: $a <br>";
echo "Valor de C: $b <br><br>";

echo "Soma (D + C): $soma <br>";
echo "Subtração (A - C): $subtracao <br>";
echo "Multiplicação (V * C): $multiplicacao <br>";
echo "Divisão (X / C): $divisao <br>";
echo "Módulo (A % c): $modulo <br>";
echo "Exponenciação (BS ** 2): $exponenciacao <br>";

echo "<hr>";

/*
>> Comparação:
   - == (igual a)
   - != (diferente de)
   - > (maior que)
   - < (menor que)
   - >= (maior ou menor igual a)
   - <= (menor ou maior igual a)
   */
   
   $a = 8;
   $b = "8";
   $c = 12;

   var_dump ($a == $b); 
   var_dump ($a === $b);
   var_dump ($a != $b);
   var_dump ($a !== $b);
   var_dump ($a > $c);
   var_dump ($a < $b);

   echo "<hr>";


$idade = 18;
$temCarteira = true;

if ($idade >= 18 && $temCarteira) {
    echo "Pode dirigir.";
} else if ($idade < 18) {
    echo "Não pode dirigir.";
} else {
    echo "Não pode dirigir.";
}

echo "<br>";

$clienteNovo = false;
$temCupom = true;

if (!$clienteNovo && $temCupom) {
    echo "Cliente pode usar o desconto.";
} else {
    echo "Cliente não tem direito ao desconto.";
}

echo "<br>";

$estaChovendo = false;

if (!$estaChovendo ) {
    echo "está ensolarado";
} else {
  echo "está chovendo";
}

echo "<hr>";

// -> Operadores de incremento/decremento: Usados para aumentar ou diminuir o valor de uma variável numerica em 1.

$contador = 0;

$contador++;
echo $contador . "<br>"; // 1

$contador++;
echo $contador . "<br>"; // 2

$contador--;
echo $contador . "<br>"; // 1

$contador--;
echo $contador . "<br>"; // 0



  


?>
 

