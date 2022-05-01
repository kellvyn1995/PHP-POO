<?php
require_once 'classeAnimal.php';
class Ave extends Animal{
    private $corPena;
    public function alimentar(){
        echo "<p>Comento frutas</p>";
    }
    public function emitirSom()
    {
        echo "<p>Som de ave</p>";
    }
    public function locomover()
    {
        echo "<p>voando</p>";
    }

    public function fazerNinho(){
        echo "<p>Construindo um ninho</p>";
    }

    /**
     * Get the value of corPena
     */ 
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * Set the value of corPena
     *
     * @return  self
     */ 
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;

        return $this;
    }
}
?>