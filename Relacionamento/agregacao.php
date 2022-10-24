<?php 

    $produto1 = new Produto;
    $produto2 = new Produto;
    $produto3 = new Produto;

    $produto1->setID(101);
    $produto1->setNome("Mouse sem Fio");
    $produto1->setPreco(120.99);

    $produto2->setID(102);
    $produto2->setNome("Carregador Celular");
    $produto2->setPreco(79.90);

    $produto3->setID(103);
    $produto3->setNome("Roteador WI-FI");
    $produto3->setPreco(289.99);

    $carrinho = new Carrinho;

    $carrinho->incluirItens($produto1);
    $carrinho->incluirItens($produto2);
    $carrinho->incluirItens($produto3);

    echo "Itens no Carrinho: ----------------- </br>";
    echo $carrinho->exibirCarrinho() . "</br>";
    echo "O Valor total da compra: R$ " . $carrinho->totalCompra();

?>