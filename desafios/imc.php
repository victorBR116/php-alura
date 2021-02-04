<?php

$peso = 64;
$altura = 1.67;
$imc = $peso/$altura **2;

echo"seu IMC é de $imc. Você está com o IMC ";

if ($imc <18){
    echo"você está abaixo do peso amigão ";
}elseif($imc <25){
    echo"Você está dentro do peso Parabéns ";
}else{
    echo" você tem que emagrecer ";
}

   