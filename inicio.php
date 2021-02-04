<?php 

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver mais de 18 anos cabeça de pika.". PHP_EOL;

if ($idade >= 18) {
    echo"Parabéns cabeça de rola você tem $idade pode entrar" . PHP_EOL;
}else if ($idade >= 16 && $numeroDePessoas > 1){
    echo "você tem $idade mas está com a mamãe então pode entrar";
} else
    echo "Você não pode entrar você tem $idade.";


echo PHP_EOL;
echo'Adeus!!';