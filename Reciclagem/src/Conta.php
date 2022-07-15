<?php

class Conta{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;
    
    //Função de saque!!
    public function sacar(float $valorASacar){
        if($valorASacar > $this->saldo ){
            echo "Você não possui saldo suficiente!" . PHP_EOL;
        }else{
            $this->saldo -= $valorASacar;
        };
    }
    // Função de depósito!!
    public function depositar(float $valorADepositar){
        if($this->saldo = "1000"){
            echo "Você não pode ter mais que 1.000 R$ de saldo!".PHP_EOL;
        }else{
            $this->saldo += $valorADepositar;
        }      
    }
    
    //Função que exibe meu saldo!!
    public function meuSaldo(){

        echo "Seu saldo é de {$this->saldo} R$" . PHP_EOL;
    }
}

?>