<?php

 function meuImc($imcPessoa){
    if($imcPessoa > 18.5){
        echo "Seu imc é {$imcPessoa} você está Abaixo do Peso" . PHP_EOL;
    } else
    if($imcPessoa >= 18.5 || $imcPessoa <= 24.9){
        echo "Seu imc é {$imcPessoa} você está com Peso Normal" . PHP_EOL;
    }else
    if($imcPessoa >= 25 || $imcPessoa <= 29.9){
        echo "Seu imc é {$imcPessoa} você está Sobrepeso" . PHP_EOL;
    }else
    if($imcPessoa >= 30 || $imcPessoa <= 39.9){
        echo "Seu imc é {$imcPessoa} você está OBESO" . PHP_EOL;
    }else
    if($imcPessoa >= 40){
        echo "Seu imc é {$imcPessoa} você está com Obesidade Mórbida" . PHP_EOL;
    }
 }
?>