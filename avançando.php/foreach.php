<?php
$contaCorrentes = [
   '123.131.239-7' =>  [
    'titular' => 'Victor',
    'saldo' => 1000
   ],
   '123.145.125-1' =>  [
    'titular' => 'Gaby',
    'saldo' => 10000
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
foreach ($contaCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular']  . PHP_EOL;
} 