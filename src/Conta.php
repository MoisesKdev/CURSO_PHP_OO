<?php

class conta
{
   public string $cpfTitular;
   public string $nomeTitular;
   public float $saldo;

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo){
            echo 'Saldo Indisponível';
        }else {
            $this->saldo -= $valorASacar;
        }
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0){
            echo "valor precisa ser positivo";
        }else{
        $this->saldo += $valorADepositar;
        }
    }

}