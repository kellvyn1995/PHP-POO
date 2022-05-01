<?php
class Lutador{
    // Atributos
    private $nome, $nacionalidade, $idade, $altura, $peso, $categoria, $vitorias, $derrotas, $empates;
    //Metodos
    function apresentar(){
        echo "------------------------- <br>";
        echo "CHEGOU A HORA! O lutador " . $this->getNome();
        echo "<br>veio diretamente de " . $this->getNacionalidade();
        echo " tem ". $this->getIdade() . " anos e pesa ". $this->getPeso()."Kg";
        echo "<br>Ele tem " . $this->getVitorias(). " vitórias ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . "  empates ". $this->getEmpates()."<br>";
    }
    function status(){
        echo "-------------------------<br>";
        echo " " . $this->getNome() . " é um peso ". $this->getCategoria();
        echo " e já ganhou ". $this->getVitorias() . " vezes ";
        echo " perdeu ". $this->getDerrotas() . " vezes e ";
        echo " empatou ". $this->getEmpates() . " vezes! <br>";

    }
    function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    // Metodos especiais
    function __construct($nome_p, $nacionalidade_p, $idade_p, $altura_p, $peso_p, $vitorias_p, $derrotas_p, $empates_p)
    {//_parametro = _p
        $this->nome = $nome_p;
        $this->nacionalidade = $nacionalidade_p;
        $this->idade = $idade_p;
        $this->altura = $altura_p;
        $this->setPeso($peso_p);
        $this->vitorias = $vitorias_p;
        $this->derrotas = $derrotas_p;
        $this->empates = $empates_p;
    }

    

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of nacionalidade
     */ 
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * Set the value of nacionalidade
     *
     * @return  self
     */ 
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of altura
     */ 
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */ 
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }


    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

     
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria()
    {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3){
            $this->categoria = "Leve";
        }elseif($this->peso <= 83.9){
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
        
    }



    public function getVitorias()
    {
        return $this->vitorias;
    }

    /**
     * Set the value of vitorias
     *
     * @return  self
     */ 
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;

        return $this;
    }

    /**
     * Get the value of derrotas
     */ 
    public function getDerrotas()
    {
        return $this->derrotas;
    }

    /**
     * Set the value of derrotas
     *
     * @return  self
     */ 
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;

        return $this;
    }

    /**
     * Get the value of empates
     */ 
    public function getEmpates()
    {
        return $this->empates;
    }

    /**
     * Set the value of empates
     *
     * @return  self
     */ 
    public function setEmpates($empates)
    {
        $this->empates = $empates;

        return $this;
    }
}

?>