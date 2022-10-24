<?php 

    require_once('Classes/produto.php');
    require_once('Generalizacao/vendido.php');
    require_once('Generalizacao/estoque.php');
    require_once('Classes/marca.php');
    require_once('Classes/carrinho.php');

    echo "------------------------- Classes e Objetos ------------------------------- </br></br>";

    $produto = new Produto;
    $produto->setID("1001");
    $produto->setNome("Item 1");
    echo "ID: " . $produto->getID();
    echo "</br>";
    echo "Nome do Produto: " . $produto->getNome();
    echo "</br></br>";

    $marca = new Marca;
    $marca->setID("101");
    $marca->setNome("Fabricante 1");
    echo "ID: " . $marca->getID();
    echo "</br>";
    echo "Marca do Produto: " . $marca->getNome();
    echo "</br></br>";

    echo "------------------------- Relacionamento: Associação ----------------- </br></br>";

    include 'Relacionamento/associacao.php';



    echo "</br></br>------------------------- Relacionamento: Agregação ------------------- </br></br>";

    include 'Relacionamento/agregacao.php';


    echo "</br></br>--------------------------------- Generalização: Produtos - estoques/vendidos ------------------------------ </br></br>";

    include 'Generalizacao/produto_gen.php';

?>