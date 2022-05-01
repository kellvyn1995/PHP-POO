<?php
class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar(){ // para verificar um atributo que esta dentro de um metodo tem que usa THIS
        if($this->tampada == true){
            echo "estou rabiscando... </br>";
        }else {
            echo "erro! não posso rabiscar</br>";
        } 
    }
    public function tampar(){
        $this->tamapda = true;
    }
    public function destampada(){
        $this->tamapda = false;
    }
}
?>