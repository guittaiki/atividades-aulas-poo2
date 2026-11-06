<?php

abstract class Veiculo
{
    private $marca;
    private $modelo;
    private $ano;

    public function __construct($marca, $modelo, $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getAno()
    {
        return $this->ano;
    }

    abstract public function calcularDiaria(): float;
}
?>
