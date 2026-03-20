<?php
    // 1- Revisão: Fundamento da linguagem php. 

    /*
    O que são estruturas de controle ?

        - mecanismos para controlar o fluxo de execução de código,
        permitindo que diferentes blocos de código sejam executados sob 
        certas condições ou repetidamente.

        - estruturas condicionais:
            if: executa um bloco de código se uma condição for verdadeira.

            if...else: executa um  bloco de código se a condição for verdadeira e outro bloco se for falsa.

            if...elseif...else: que permite verificar multiplas condições sequenciamente.

            switch: seleciona um bloco de código para executar com base no valor de uma expressão.

        - Estruturas de Repetição (loops):
            while: executa um bloco de código enquanto uma condição for verdadeira.

            do...while: similar ao while mas garante que o bloco do código seja executado pelo menos uma vez.

            for: executa um bloco de código um número especifico de vezes.

            foreach: especificamente para percorer arrays e objetos.
    */
    
    $nota = 7.5;

    if ($nota > 7) {
        echo "aprovado";
    } elseif ($nota >=5){
        echo "recuperação";
    } else {
        echo "reprovado";
    }

    echo "<br>";

    $idade = 18;

    if ($idade >=60){
        echo"idoso";
    } elseif ($idaide >=25){
        echo"Você é adulto";
    } elseif ($idade >=18){
        echo "Você é jovem";
    } elseif ($idaide >= 13){
        echo "Você é adolescente";
    } else {
        echo "Você é criança";
    }

    echo"<br>";
    $diasemana = "3";

    switch ($diasemana){
        case "1";
            echo "o dia da semana é domingo";
            break;
        case "2";
            echo "o dia da semana é segunda-feira";
            break;
        case "3";
            echo "o dia da semana é terça-feira";
            break;
        case "4";
            echo "o dia da semana é quarta-feira";
            break;
        case "5";
            echo "o dia da semana é quinta-feira";
            break;
        case "6";
            echo "o dia da semana é sexta-feira";
            break;
        case "7";
            echo "o dia da semana é sábado";
            break;
        default:
        echo"dia não encontrado";
    }

    echo "<br>";

        $cor = "azul";

    switch ($cor){
        case "verde";
            echo "a cor é verde";
            break;
        case "vermelho";
            echo "a cor é vermelho";
            break;
        case "amarelo";
            echo "a cor é amarelo";
            break;
        case "azul";
            echo "a cor é azul";
            break;
        case "preto";
            echo "a cor é preto";
            break;
        case "branco";
            echo "a cor é branco";
            break;
        default:
        echo"cor não encontrada";
    }

    echo "<br>";

    $contador = "0";

    while ($contador <5) {
        echo "o contador é ".$contador."<br>";
        $contador++;
    }
    echo"<br>";

    $tentativas = 0;
    $senhacorreta = "secreto";
    $senhadigitavel="errada";

    do {
        echo "tentativa de login número: ".($tentativas + 1)."<br>";
        $tentativas ++;

        if ($tentativas == 6) {
            $senhadigitavel = "secreto";
        }
    } while ($senhadigitavel != $senhacorreta && $tentativas <5);

    if ($senhadigitavel === $senhacorreta) {
        echo "Login bem sucedido";
    } else {
        echo "Numero máximo de tentativas excedido";
    }
    
    echo "<br>";

    for ($i = 1; $i <=5; $i++) {
        echo "O valor de i e:".$i."<br>";
    }



?>