<?php

class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){ // para verificar um atributo que esta dentro de um metodo tem que usa THIS
        if($this->tampada == true){
            echo "estou rabiscando... </br>";
        }else {
            echo "erro! não posso rabiscar</br>";
        } 
    }
    function tampar(){
        $this->tamapda = true;
    }
    function destampada(){
        $this->tamapda = false;
    }
}
?>