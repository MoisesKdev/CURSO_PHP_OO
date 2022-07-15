<?php

class Pessoa{
    public string $nomePessoa;
    public string $alturaPessoa;
    public string $pesoPessoa;

    
    public function calculoImc(){
      $imcPessoa = $this->pesoPessoa/($this->alturaPessoa*$this->alturaPessoa);
        return $imcPessoa;
    }

    
}



?>