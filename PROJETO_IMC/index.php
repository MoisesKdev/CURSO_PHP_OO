<?php
//Incluí obrigatóriamente os arquivos
require_once ("/home/moises/Documentos/CURSO_PHP_OO/PROJETO_IMC/src/classes.php");
require_once("/home/moises/Documentos/CURSO_PHP_OO/PROJETO_IMC/src/function.php");


//Cria uma variável Pessoa1 com tipo Pessoa > definido em classes.php
$Pessoa1 = new Pessoa;
$Pessoa1->nomePessoa = "Moisés";
$Pessoa1->alturaPessoa = "1.80";
$Pessoa1->pesoPessoa = "110";

//exibe retorno da função calculoImc() > definida em classes.php
echo $Pessoa1->calculoImc();

echo PHP_EOL;

?>