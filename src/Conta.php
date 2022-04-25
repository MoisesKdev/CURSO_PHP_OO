<?php

class conta
{
   private string $cpfTitular;
   private string $nomeTitular;
   private float $saldo = 0;

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo){
            echo 'Saldo Indisponível';
            return;
        }
        
        $this->saldo -= $valorASacar;
        
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0){
            echo "valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
        
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo){
            echo "Saldo Indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);

    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function defineCpfTitular(string $cpf) : void
    {
        $this->cpfTitular = $cpf;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function defineNomeTitular(string $nome) : void
    {
        $this->nomeTitular = $nome;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }

}