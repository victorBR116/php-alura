<?php
$conta1 = [
    'titular' => 'Victor',
    'saldo' => 1000

];

$conta2 = [
    'titular' => 'Gaby',
    'saldo' => 10000
];
$conta3 = [
    'titular' => 'Haendel',
    'saldo' => 2000 
];

$contaCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contaCorrentes); $i++){
   echo $contaCorrentes[$i] ['saldo'] . PHP_EOL;
}