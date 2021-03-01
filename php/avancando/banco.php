<?php   

function exibeMensagem($mensagem){
    echo $mensagem, '<br>';
}

function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
}   

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

$saque = 500;



$contasCorrentes['123.456.789-98'] = sacar($contasCorrentes['123.456.789-98'], $saque);



foreach($contasCorrentes as $cpf=> $conta){
    exibeMensagem("certification of physical person $cpf. -NAME " . $conta['titular'], '<br><br>');
};