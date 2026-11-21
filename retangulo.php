<?php
class Retangulo {
    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->setLargura($largura);
        $this->setAltura($altura);
    }

    public function getLargura() { return $this->largura; }
    public function getAltura() { return $this->altura; }

    public function setLargura($largura) {
        if ($largura > 0) {
            $this->largura = $largura;
        } else {
            echo "Largura deve ser positiva<br>";
        }
    }

    public function setAltura($altura) {
        if ($altura > 0) {
            $this->altura = $altura;
        } else {
            echo "Altura deve ser positiva<br>";
        }
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }

    public function calcularPerimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}

$r1 = new Retangulo(5, 3);
$r2 = new Retangulo(4, 6);

echo "Área do retângulo 1: " . $r1->calcularArea() . "<br>";
echo "Área do retângulo 2: " . $r2->calcularArea() . "<br>";

if ($r1->calcularArea() > $r2->calcularArea()) {
    echo "O retângulo 1 tem a maior área";
} else if ($r2->calcularArea() > $r1->calcularArea()) {
    echo "O retângulo 2 tem a maior área";
} else {
    echo "Os dois têm a mesma área";
}
?>