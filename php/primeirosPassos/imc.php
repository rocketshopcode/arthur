<?php

$peso = 67;
$altura = 1.71;

$imc = $peso/($altura * $altura);

if($imc <= 18.5){
    echo"Seu imc é $imc, seu imc esta abaixo da media";
}

if($imc > 25){
    echo"Seu imc é $imc, esta acima da media";
}

if($imc >= 18.5 && $imc < 35){
    echo"Seu imc é $imc, seu imc esta exelente";
}
