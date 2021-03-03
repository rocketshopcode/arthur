<?php   


require_once 'funcoes.php';
require_once 'funcoes.php';

$contasCorrentes = [
   '123.456.789-98' => [
        'titular'=> 'Ronaldo',
       'saldo'=>1000 
   ],
   '138.765.431-23' => [
       'titular'=> 'Vitor',
       'saldo'=>10000
   ],
   '287.654.323-45' => [
       'titular'=> 'Arthur',
       'saldo'=>300 
    ]
];  

$dinheiro = 400;


$contasCorrentes['123.456.789-98'] = 
sacar($contasCorrentes['123.456.789-98'], 
$dinheiro);

$contasCorrentes['138.765.431-23'] = 
sacar($contasCorrentes['138.765.431-23'], 
$dinheiro);

$contasCorrentes['287.654.323-45'] = 
depositar($contasCorrentes['287.654.323-45'],
 $dinheiro);

titularComLetraMaiuscula($contasCorrentes['287.654.323-45']);

unset($contasCorrentes['138.765.431-23']);



foreach($contasCorrentes as $cpf=> $conta){
    ['titular' => $titular, 'saldo' => $saldo ] = $conta;
    exibeMensagem("CPF $cpf. -NOME   $titular <br> SALDO $saldo<br><br>");
}