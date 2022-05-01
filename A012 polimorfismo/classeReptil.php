<?php
require_once 'classeAnimal.php';
class Reptil extends Animal{
    private $corEscama;
    public function alimentar(){
        echo "<p>Comento vegetais</p>";
    }
    public function emitirSom()
    {
        echo "<p>Som de reptil</p>";
    }
    public function locomover()
    {
        echo "<p>Rastejando</p>";
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