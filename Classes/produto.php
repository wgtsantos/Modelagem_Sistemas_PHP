<?php 

    class Produto {

        private $id_produto;
        private $nome;
        public $preco;
        public $qtd_produto;
        public $qtd_estoque;
        private $marca;


        function getID(){
            return $this->id_produto;
        }

        function getNome(){
            return $this->nome;
        }

        function getPreco(){
            return $this->preco;
        }

        function getQtdP(){
            return $this->qtd_produto;
        }

        function getQtdE(){
            return $this->qtd_estoque;
        }

        function getMarca(){
            return $this->marca;
        }
       
        function setID($id_produto){
            $this->id_produto = $id_produto;
        }

        function setNome($nome){
            $this->nome = $nome;
        }

        function setPreco($preco){
            $this->preco = $preco;
        }

        function setQtdP($qtd_produto){
            $this->qtd_produto = $qtd_produto;
        }

        function setQtdE($qtd_estoque){
            $this->qtd_estoque = $qtd_estoque;
        }

        function setMarca($marca){
            $this->marca = $marca;
        }


        function listarDados() {

            echo "</br>";
            echo "ID: " . $this->id_produto . "</br>";
            echo "Nome do Produto: " . $this->nome . "</br>";
            echo "Preço: " . $this->preco . "</br>";
            echo "----------------------------------------------------- </br>";
        }


    }


?>
