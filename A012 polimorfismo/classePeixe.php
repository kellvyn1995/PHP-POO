<?php
require_once 'classeAnimal.php';
class Peixe extends Animal{
    private $corEscama;
    public function alimentar(){
        echo "<p>Comento substancias</p>";
    }
    public function emitirSom()
    {
        echo "<p>peixe não faz som</p>";
    }
    public function locomover()
    {
        echo "<p>nadando</p>";
    }


    /**
     * Get the value of corEscama
     */ 
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     *
     * @return  self
     */ 
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}
?>