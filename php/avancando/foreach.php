<?php



$contasCorrentes = [

    12345678998 => [
        'titular'=> 'Vinicius',
        'saldo'=>1000
    ],
    13876543123 => [
        'titular'=> 'Vitor',
        'saldo'=>10000
    ],
    28765432345 => [
        'titular'=> 'Arthur',
        'saldo'=>300
    ]
];  

$contasCorrentes[45765738945] = [
    'titular' => 'Rolnaldo',
    'saldo' => 1250
];

foreach($contasCorrentes as $cpf=> $conta){
    echo "CPF $cpf. -NOME " . $conta['titular'], '<br><br>';

};

