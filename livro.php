<?php
class Livro {
    private $titulo;
    private $autor;
    private $paginas;

    public function __construct($t, $a, $p) {
        $this->titulo = $t;
        $this->autor = $a;
        $this->paginas = $p;
    }

    public function getTitulo() { return $this->titulo; }
    public function getAutor() { return $this->autor; }
    public function getPaginas() { return $this->paginas; }

    public function setTitulo($t) { $this->titulo = $t; }
    public function setAutor($a) { $this->autor = $a; }
    public function setPaginas($p) { $this->paginas = $p; }

    public function exibir() {
        echo "Título: " . $this->getTitulo() . "<br>";
        echo "Autor: " . $this->getAutor() . "<br>";
        echo "Páginas: " . $this->getPaginas() . "<br><br>";
    }
}

$livro1 = new Livro("Dom Casmurro", "Machado de Assis", 256);
$livro2 = new Livro("Quarto de Despejo", "Carolina Maria de Jesus", 200);

$livro1->exibir();
$livro2->exibir();
?>