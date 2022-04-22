<?php

//Funcionalidade deste arquivo é criar uma conta.

function criarConta(string $cpf, string $nomeTitular, float $saldo) : array
{
    return [
            $cpf =>[
                'titular' => $nomeTitular,
                'saldo' => $saldo,
            ]
        ];
}