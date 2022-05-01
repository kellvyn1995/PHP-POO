<?php
require_once 'controlador.php';
class ControleRemoto implements controlador{
    // atributos
    private $volume;
    private $ligado;
    private $tocando;
    // metodos especiais
    function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    public function getVolume()
    {
        return $this->volume;
    }
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }
    public function getLigado()
    {
        return $this->ligado;
    }
    public function setLigado($ligado)
    {
        $this->ligado = $ligado;

        return $this;
    }
    public function getTocando()
    {
        return $this->tocando;
    }
    public function setTocando($tocando)
    {
        $this->tocando = $tocando;

        return $this;
    }


    public function desligar()
    {
        $this->setLigado(false);
    }
    public function desligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }
    public function fecharMenu()
    {
        echo "<br> Fechando menu...";
    }
    public function ligar()
    {
        $this->setLigado(true);
    }
    public function ligarMudo()
    {
        if ($this->getLigado() && $this->getVolume()>0) {
            $this->setVolume(0);
        }
    }
    public function maisVolume()
    {
        if ($this->getLigado()) {
           $this->setVolume($this->getVolume() + 5);
        }else {
            echo " erro! não posso aumenta o volume";
        }
    }
    public function menosVolume()
    {
        if ($this->getLigado()) {
            $this->setLigado($this->getVolume() - 5);
        }
    }
    public function pause()
    {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
    public function play()
    {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }
    public function abrirMenu()
    {
        echo "<br> Esta ligado?: ".($this->getLigado()?"SIM":"NAO");
        echo "<br> Esta tocando?: ".($this->getTocando()?"SIM":"NAO");
        echo "<br> Volume: ".$this->getVolume();
        for($i=0; $i<= $this->getVolume(); $i+=10){
            echo "|";
        }
        echo "<br>";
    }

}
?>