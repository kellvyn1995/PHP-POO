<?php
class ContaBanco{
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    // metodos
    public function abrirConta($t) // definindo o tipo da conta é o valor da conta
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        }elseif ($t == "CP"){
            $this->setSaldo(150);
        }

    }
    public function fecharConta() // verificando se é possivel fechar a conata,verificando o saldo 
    {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda tem saldo não pode ser fechada</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta está em debito. Impossivel encerrar!</p>";
        }
        
    }
    public function depositar($v) // definindo o valor do deposito 
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
        } else {
            echo "conta fechada. não foi possivel depositar.";
        }
    }
    public function sacar($v)
    {
        if ($this->getStatus()) { // verificando o saldo da conta 
            if ($this->getSaldo() >= $v){ // se o valor que tem na conta for maior ou igual pode sacar 
                $this->setSaldo($this->getSaldo() - $v);
            }else{
                echo "Saldo insuficiente para saque.";
            }
        }else{
            echo "Conta fechada!";
        }
    }
    public function pagarMensal()
    {
        if ($this->getTipo() == "CC") {
            $v = 12;
        } elseif ($this->getTipo() == "CP"){
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
        } else {
            echo "Problema com a conta. Não posso cobrar.";
        }
        
        
    }
    // metodos especiais 
    public function __construct() // definindo atributos na crianção do objeto
    {
        $saldo = 0;
        $status = false;
    }
    
    public function getNumConta()
    {
        return $this->numConta;
    }
    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getDono()
    {
        return $this->dono;
    }
    public function setDono($dono)
    {
        $this->dono = $dono;

        return $this;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}

?>
