<?php

function funcao1(){
    echo 'Entrei na função 1<br>';
    try{
        funcao2();
        //$arrayFixo = new SplFixedArray(2);
        //$arrayFixo[0] = 'valor';
    } catch(RuntimeException $problema) {
        echo "Na função 1, eu resolvi o problema da função 2<br>";
    } catch(DivisionByZeroError)
        //$divisao = itdiv(5, 0);
    //funcao2();
    echo 'Saindo da função 1<br>';
}

function funcao2(){
    echo 'Entrei na função 2<br>';
    for ($i = 1; $i <= 5; $i++){
        echo "$i <br>";
        
    }
    echo 'Saindo da função 2<br>';
}

echo 'Iniciando o programa principal<br>';
funcao1();
echo 'Finalizando o programa principal<br>';