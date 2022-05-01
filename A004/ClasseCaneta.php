<?php
class Caneta{
    public $modelo;
    private $ponta;
    
    public function getModelo(){ // acessando o atributo usando o metodo de acesso get
        return $this->modelo; // retorna o modelo da caneta
    }
    public function setModelo($m){ // passando o novo atributo, usando o metodo set
        $this->modelo = $m; // passando o novo modelo
    }
    public function getPonta(){ 
        return $this->ponta; 
    }
    public function setPonta($p){ 
        $this->ponta = $p;
    }
}

class CanetaPronta{
    private $modelo2;
    private $cor2;
    private $ponta2;
    private $tampada2;
    // motodo construtor 
    public function __construct($m2,$c2,$p2){ 
        $this->modelo2 = $m2;
        $this->cor2 = $c2;
        $this->ponta2 = $p2;
        $this->tampar(); // chamando o metodo tampar dentro do metodo construtor
    }
    public function tampar(){
        $this->tampada2 = true;
    }
}
?>