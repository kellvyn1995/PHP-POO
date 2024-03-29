<?php
require_once 'classe abstrata pessoa.php';
class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    // o metodo pagarMensalaidade tem acesso direto ao atributo nome porque é uma classe filha da classe abstrata pessoa
    public function pagarMensalidade(){
            echo "<p>Pagando mensalidade do aluno $this->nome</p>";
    }

    /**
     * Get the value of matricula
     */ 
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     *
     * @return  self
     */ 
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
}
?>