<?php
class Estoque {
    private $produtos = [];

    public function adicionarProduto($nome, $quantidade) {
        $this->produtos[] = ['nome' => $nome, 'qtd' => $quantidade];
    }

    public function listarProdutos() {
        foreach ($this->produtos as $p) {
            echo $p['nome'] . ": " . $p['qtd'] . "<br>";
        }
    }

    public function totalItens() {
        $total = 0;
        foreach ($this->produtos as $p) {
            $total = $total + $p['qtd'];
        }
        return $total;
    }
}

$estoque = new Estoque();
$estoque->adicionarProduto("Caderno", 20);
$estoque->adicionarProduto("Caneta", 50);
$estoque->adicionarProduto("Lápis", 30);

$estoque->listarProdutos();
echo "Total de itens: " . $estoque->totalItens();
?>