<?php 

    $marca = new Marca;
    $marca->setNome("Mondial");
    $marca->setCNPJ("94.629.972/0001-93");

    $produto = new Produto;
    $produto->setID(1002);
    $produto->setNome("Liquidificador");
    $produto->setPreco(199.59);
    $produto->setQtdP(10);
    $produto->setMarca($marca->getNome());

    echo "ID: " . $produto->getID();
    echo "</br>";
    echo "Nome do Produto: " . $produto->getNome();
    echo "</br>";
    echo "Preço do Produto: " . $produto->getPreco();
    echo "</br>";
    echo "Quantidade: " . $produto->getQtdP();
    echo "</br>";
    echo "Nome do Fabricante: " . $produto->getMarca();


?>