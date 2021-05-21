<?php

function funcao1(){
    echo 'Entrei na função 1<br>';
    try{
        funcao2();
    } catch(throwable $problema) {
        echo $problema->getMessage();
        echo "<br>";
        echo $problema->getLine();
        echo "<br>";
        echo $problema->getTraceAsString();
        echo "<br>";
    }
    
    echo 'Saindo da função 1<br>';
}

function funcao2(){

    echo 'Entrei na função 2<br>';

    throw new RuntimeException();

   /* $divisao = intdiv(5, 0);
    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = 'valor';

    for ($i = 1; $i <= 5; $i++){
        echo "$i <br>";
        
    }*/
    echo 'Saindo da função 2<br>';
}

echo 'Iniciando o programa principal<br>';
funcao1();
echo 'Finalizando o programa principal<br>';