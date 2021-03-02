<?php   


include 'funcdoes.php';

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
depositar($contasCorrentes['123.456.789-98'], 
$dinheiro);

$contasCorrentes['138.765.431-23'] = 
depositar($contasCorrentes['138.765.431-23'], 
$dinheiro);

$contasCorrentes['287.654.323-45'] = 
depositar($contasCorrentes['287.654.323-45'],
 $dinheiro);



foreach($contasCorrentes as $cpf=> $conta){
    exibeMensagem("CPF $cpf. -NOME   . {$conta['titular']} <br> SALDO {$conta['saldo']} <br><br>");
}