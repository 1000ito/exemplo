<?php
    // 1. REVISÃO: Fundamentos da linguagem PHP

    /*
    o que são estruturas de controle?

        - Mecanismos para controlar o fluxo de execução de código, permitindo que diferentes blocos de código sejam executados sob certas condições ou repetidamente.

        * ESTRUTURAS CONDICIONAIS:
            if: executa um bloco de código se uma condição for verdadeira.

            if...else: executa um bloco de código se a condição for verdadeira e outro bloco se for falsa.

            if...elseif...else: permite verificar múltiplas condições sequencialmente.

            switch: seleciona um bloco de código para executar com base no valor de uma expressão.

        * ESTRUTURAS DE REPETIÇÃO (Loops):
            while: executa um bloco de código enquanto uma condição for verdadeira.

            do...while: similar ao while, mas garante que o bloco de código seja executado pelo menos uma vez.

            for: executa um bloco de código um número específico de vezes.

            foreach: especificamente para percorrer a arrays e objetos.
    */
    
    $nota= 7.5;

    if ($nota >= 7) {
        echo "Aprovado";
    } elseif ($nota >= 5) {
        echo "Recuperação";
    } else {
        echo "Reprovado";
    }

    echo "<hr>";
    echo "<br>";

    $idade= 19;

    if ($idade >= 18) {
        echo "Maior de idade";
    } else{
        echo"menor de idade";
    }

    echo "<hr>";
    echo "<br>";

    $idadep= 37 ;

    if($idadep <= 2) {
        echo "Bebê";
    } elseif ($idadep < 12) {
        echo "criança";
    } elseif ($idadep <= 18) {
        echo "Adolescente";
    } elseif ($idadep < 60) {
        echo "Adulto";
    } else {
        echo "Idoso";
    }

    echo "<hr>";
    echo "<br>";

    $Dias= "Terça-feira";

    switch ($Dias) {

     case "Domingo":
       echo "Hoje é Domingo";
       break;

   case "Segunda-feira":
        echo "Hoje é Segunda-feira";
        break;

   case "Terça-feira":
        echo "Hoje é Terça-feira";
        break;

   case "Quarta-feira":
        echo "Hoje é Quarta-feira";
        break;

   case "Quinta-feira":
        echo "Hoje é Quinta-feira";
        break;

   case "Sexta-feira":
        echo "Hoje é Sexta-feira";
        break;

   case "Sabado":
        echo "Hoje é Sábado";
        break;

    default:
       echo "Dia da semana";
}

    echo "<hr>";
    echo "<br>";

    //4 cores e 1 azul

    $cor= "azul";

    switch ($cor) {

     case "verde":
       echo "A cor é Verde";
       break;

     case "rosa":
       echo "A cor é Rosa";
       break;

     case "azul":
       echo "A cor é Azul";
       break;

     case "vermelha":
       echo "A cor é vermelha";
       break;

     case "marrom":
       echo "A cor é Marrom";
       break;

   default:
       echo "Cor não encontrada";
}

    echo "<hr>";
    echo "<br>";

    $contador = 0;

    while ($contador < 5) {
    echo "O contador é:".$contador. "<br>";
    $contador++;
}

    echo "<hr>";

    $tentativas = 0;
    $senhaCorreta = "secreto";
    $senhaDigitada = "errado";


 do {
   echo "tentativa de login número: ".($tentativas +1). "<br>";
   $tentativas++;

   if($tentativas == 6) {
    $senhaDigitada = "secreto";
   }

 } while ($senhaDigitada != $senhaCorreta && $tentativas < 5 );

 if ($senhaDigitada == $senhaCorreta) {
        echo " login bem-sucedido";
 } else {
    echo "numero maximo de tentativas excedido.";
 }

echo "<hr>";
echo "<br>";

        // Daqui para baixo !!!

for ($i = 1; $i <= 10; $i++) {
    echo "Não sei oque o professor pediu: " . $i . "<br>";
}

echo "<hr>";
echo "<br>";

$frutas = ["Seilá", "Seilá", "Seilá", "Seilá", "Seilá"];

foreach ($frutas as $fruta) {
    echo "Aleatório: " . $fruta . "<br>";
}


