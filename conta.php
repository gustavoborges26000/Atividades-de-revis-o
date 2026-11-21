<?php
class ContaBancaria {
    private $titular;
    private $saldo;

    public function __construct($titular) {
        $this->titular = $titular;
        $this->saldo = 0;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo = $this->saldo + $valor;
        } else {
            echo "Valor inválido para depósito<br>";
        }
    }

    public function sacar($valor) {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente<br>";
            return;
        }
        $this->saldo = $this->saldo - $valor;
    }

    public function getSaldo() { return $this->saldo; }
    public function getTitular() { return $this->titular; }
}

$conta = new ContaBancaria("Gustavo");
$conta->depositar(500);
$conta->sacar(200);
echo "Titular: " . $conta->getTitular() . "<br>";
echo "Saldo final: R$ " . $conta->getSaldo();
?>