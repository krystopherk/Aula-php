<?php
    $nome = "João"; //variável do tipo string
    $idade = 25; //variável tipo inteiro
    $altura = 1.87; //variável tipo float
    $botão = true; //variável do tipo boolean

    $global = "Eu sou uma variável global"; //variaveis declaradas fora de funções são globais

    function variavel() {
        global $global1; //dentro de funções deve ser específicado que ela é global
        $global1 = "Nesse caso é uma variável global";
    }

    variavel();


    function contador() {
        static $contagem = 0; // Declarando a variável estática
        $contagem++; // Incrementa o valor da variável
        echo $contagem . "\n"; // Exibe o valor de $contagem
    }

    contador(); // Saída: 1
    contador(); // Saída: 2
    contador(); // Saída: 3

    //variáveis estáticas lembram o valor após a execução da função

    echo "Olá Mundo\n"; //echo imprime algo para o usuário

    $a = 10;
    $b = 3;

    //soma
    $resultado = $a + $b;
    echo $resultado . "\n"; // exibe a soma das variáveis

    //subtração
    $resultado = $a - $b;
    echo $resultado . "\n"; // exibe a subtração das variáveis

    //multiplicação
    $resultado = $a * $b;
    echo $resultado . "\n"; // exibe a multiplicação das variáveis

    //divisão
    $resultado = $a / $b;
    echo $resultado . "\n"; // exibe a divisão das variáveis

    //módulo
    $resultado = $a % $b;
    echo $resultado . "\n"; //exibe o resto da divisão

    $var1 = true;
    $var2 = false;
    
    if ($var1 && $var2) {
        echo "Ambas as condições são verdadeiras.\n";
    } else {
        echo "Pelo menos uma condição é falsa.\n";
    } //&& equivale a um And, onde ambas condições devem ser verdadeiras

    if ($var1 || $var2) {
        echo "Pelo menos uma condição é verdadeira.\n";
    } else {
        echo "Ambas as condições são falsas.\n";
    } //|| equivale a um Or, onde uma das condições deve ser verdadeira

    if ($var1 xor $var2) {
        echo "Somente uma condição é verdadeira.\n";
    } else {
        echo "Ambas as condições são falsas ou ambas são verdadeiras.\n";
    } // xor verifica se apenas uma das condições é verdadeira

    if (!$var1) {
        echo "A variável é falsa.\n";
    } else {
        echo "A variável é verdadeira.\n";
    } // ! inverte a operação, agora retornando true se a condição for falsa e vice-versa

    //comparações

    $a = "1";
    $b = 1;

    if ($a == $b){ // equivale a igualdade
        echo "São iguais\n";
    };

    if ($a === $b){ // equivale a igualdade porém compara também tipo
        echo "São iguais\n";
    } else {
        echo "Não são iguais.\n";
    };

    if ($a != $b){ // equivale a diferença
        echo "Não são iguais\n";
    };

    if ($a !== $b){ // não idêntico
        echo "Não são iguais\n";
    };

    if ($a < $b){ // Menor que
        echo "a é menor que b.\n";
    };

    if ($a > $b){ // Maior que
        echo "a é maior que b.\n";
    };

    if ($a <= $b){ // Menor ou igual a
        echo "a é menor ou igual a b.\n";
    };

    if ($a >= $b){ // Maior ou igual a
        echo "a é maior ou igual a b.\n";
    };

    //array
    $frutas = array("Maçã", "Banana", "Laranja");
    echo $frutas[0]; //imprime o primeiro item, índice 0
