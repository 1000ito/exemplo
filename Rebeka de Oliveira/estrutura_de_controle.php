<?PHP 

    //1. REVISÃO: Fundamentos da linguagem php

    /* o que são estrutuaras d econtrole:
        Mecanismos para controlar o fluxo de execução de código, permitindoque diferentes blocos de código sejam executados sob sertas condições ou repetidaamente.
        
        * ETRUTUAS CONDICIONAIS
            if: executa um bloco de código se uma condição for verdadeira.
            if..else: executa um bloco de código se a condição for verdadeira e outro bloco se for falsa.
            if..else-if..else: que permite verificar multiplas condições sequencialmente.
            switch: seleciona um bloco de código para executar com bas eem uma expressão.
                        
        * ESTRUTURA DE REPETIÇÃO (LOOPS)
            while: executa um bloco de código em quanto uma condição for verdadeira.
            do..while: similar ao while mas garante que o bloco de código seja executado pelo menos uma vez.
            for: executa um bloco de código um número especifico de vezes.
            foreach: usado especificamente para percorrer e objetos.
    */

    $nota = 7.5;
    if($nota >= 7){
        echo"Aprovado";
    } elseif ($nota >= 5 && $nota < 7){
        echo "Recuperação";
    } else {
        echo "Reprovado";
    }

    echo "<br>";
    
    $idade = 26;

    if($idade > 0 and $idade <= 5) {
        echo "primeira infancia";
    } elseif($idade > 5 and $idade <= 12) {
        echo "infancia";
    } elseif($idade > 12 and $idade <= 17) {
        echo "adolecencia";
    } elseif($idade > 17 and $idade <= 25) {
        echo "jovem";
    } elseif($idade > 25 and $idade <= 64) {
        echo "adulto";
    } else {
    echo "idoso";
    }

    echo "<hr>";

    $diaSemana = 3;
    switch ($diaSemana) {
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda-Feira";
            break;
        case 3: 
            echo "Terça-Feira";
            break;
        case 4:
            echo "Quarta-Feira";
            break;
        case 5:
            echo "Quinta-Feira";
            break;
        case 6:
            echo "Sexta-Feira";
            break;
        case 7:
            echo "Sábado";
            break;
        default:
            echo "Dia Inválido";
    }

    echo "<br>";

    $cor = "a";
    switch ($cor) {
        case "v":
            echo "a cor é vermelha";
            break;
        case "a":
            echo "a cor é azul";
            break;
        case "vv":
            echo "a cor é verde";
            break;
        case "l":
            echo "a cor é laranja";
        default:
            echo "cor indefinida";
    }

    echo "<hr>";

    $contador = 0;
    while($contador != 5){
        echo "$contador <br>";
        $contador++;
    }

    $tentativa = 1;
    $senhaCorreta = "1234";
    $senhaDigitada = "1234";

    do {
        echo "tentativas de login: ".$tentativa."<br>";

        if($tentativa == 5){
            $senhaDigitada = "1234";
        }
        $tentativa ++;

    } while($senhaDigitada != $senhaCorreta && $tentativa <=5);

    if ($senhaDigitada == $senhaCorreta){
        echo "Acesso permitido <br>";
    } else { 
        echo "Credenciais inválidas";
    }
    
    echo "<br>";
        
    for ($i = 1; $i < 5; $i++){
        echo $i."<br>";
    }
?>