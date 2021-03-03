<?php

$idadeList = [24, 31, 15, 19, 27, 36]; 

list($idadeRonaldo, , $idadeArthur) = $idadeList;


$idadeList[] = 20;

foreach($idadeList as $idade){
    echo $idade,'<br>';
}