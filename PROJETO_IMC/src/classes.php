<?php
class Pessoa{
    public string $nomePessoa;
    public string $alturaPessoa;
    public string $pesoPessoa;

    
    public function imcPessoa(){
      $imcPessoa = $this->pesoPessoa/($this->alturaPessoa*$this->alturaPessoa);
        //echo  meuImc($a = null);
        //echo "Seu imc!" . PHP_EOL;
    }
    
}



?>