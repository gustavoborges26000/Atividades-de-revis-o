<?php
class Temperatura {
    private $celsius;

    public function __construct($celsius) {
        $this->celsius = $celsius;
    }

    public function getCelsius() { return $this->celsius; }
    public function setCelsius($celsius) { $this->celsius = $celsius; }

    public function paraFahrenheit() {
        return ($this->celsius * 9 / 5) + 32;
    }

    public function paraKelvin() {
        return $this->celsius + 273.15;
    }
}

$valores = [0, 100, 37];

foreach ($valores as $v) {
    $t = new Temperatura($v);
    echo $t->getCelsius() . "°C = ";
    echo $t->paraFahrenheit() . "°F = ";
    echo $t->paraKelvin() . " K<br>";
}
?>