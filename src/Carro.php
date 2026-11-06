<?php

require_once "src/Veiculo.php";

class Carro extends Veiculo
{
    private $quantidadePortas;

    public function __construct($marca, $modelo, $ano, $quantidadePortas)
    {
        parent::__construct($marca, $modelo, $ano);
        $this->quantidadePortas = $quantidadePortas;
    }

    public function getQuantidadePortas()
    {
        return $this->quantidadePortas;
    }

    public function calcularDiaria(): float
    {
        return 150.00;
    }
}
?>
