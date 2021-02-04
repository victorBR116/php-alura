<?php

function exibeMensagem($mensagem)
{
     echo $mensagem . PHP_EOL; 
}
}

$contaCorrentes = [
   '123.131.239-7' =>  [
    'titular' => 'Victor',
    'saldo' => 1000
   ],
   '123.145.125-1' =>  [
    'titular' => 'Gaby',
    'saldo' => 399
   ], 
   '121.313.536-2' => [
    'titular' => 'Haendel',
    'saldo' => 2000
    ]
];  
$contaCorrentes['123.421.445-1'] = [ 
    'titular' => 'ramiro',
    'saldo'  => 9102
];

$contaCorrentes['123.131.239-7']['saldo'] -= 500;

if(500 > $contaCorrentes['123.145.125-1']['saldo']){
    echo "Você não tem saldo suficiente para sacar POBRE" . PHP_EOL;
}else{ 
    $contaCorrentes['123.145.125-1']['saldo'] -=500;
}

foreach ($contaCorrentes as $cpf => $conta){
  exibeMensagem($mensagem $cpf . " " . $conta['titular'] . ' '. $conta['saldo']); . PHP_EOL;
} 