<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(500);
$primeiraConta->sacar(200);
$primeiraConta->defineCpfTitular('123.456.789-10');
$primeiraConta->defineNomeTitular('Moisés Kalebe');

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
