<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(500);
$primeiraConta->sacar(200);
$primeiraConta->defineCpfTitular('123.456.789-10');
$primeiraConta->defineNomeTitular('Moisés Kalebe');

echo "Olá Sr(a). {$primeiraConta->recuperaNomeTitular()}" . PHP_EOL;
echo "CPF de {$primeiraConta->recuperaCpfTitular()}" . PHP_EOL;
echo "Saldo atual em conta é de {$primeiraConta->recuperaSaldo()} R$" . PHP_EOL;


?>