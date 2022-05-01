<?php
require_once 'classe aluno.php';
class Bolsista extends Aluno{
    private $bolsa;
    public function renovarBolsa(){
        echo '<p>Bolsa paga</p>';
    }
    public function pagarMensalidade(){ //esse metodo sobrepõe o metodo da classe aluno
        echo "<p>$this->nome é bolsista paga com desconto!</p>";
    }

    /**
     * Get the value of bolsa
     */ 
    public function getBolsa()
    {
        return $this->bolsa;
    }

    /**
     * Set the value of bolsa
     *
     * @return  self
     */ 
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;

        return $this;
    }
}
?>