<?php

require_once __DIR__ . '/Veiculo.php';

class Moto extends Veiculo
{
    private $cilindradas;

    public function __construct($marca, $modelo, $ano, $cilindradas)
    {
        parent::__construct($marca, $modelo, $ano);
        $this->cilindradas = $cilindradas;
    }

    public function getCilindradas()
    {
        return $this->cilindradas;
    }

    public function calcularDiaria(): float
    {
        return 70.00;
    }
}
?>
