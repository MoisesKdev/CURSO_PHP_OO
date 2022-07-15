<?php

require_once ("/home/moises/Documentos/CURSO_PHP_OO/PROJETO_IMC/src/classes.php");
require_once("/home/moises/Documentos/CURSO_PHP_OO/PROJETO_IMC/src/function.php");

$Pessoa1 = new Pessoa;
$Pessoa1->nomePessoa = "Moisés";
$Pessoa1->alturaPessoa = "1.80";
$Pessoa1->pesoPessoa = "20";

$Pessoa1->imcPessoa();

echo PHP_EOL;

?>