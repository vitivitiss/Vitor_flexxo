<?php

    class Livros{
    
    private $nome;
    private $descricao;
    private $genero;
    private $quant_folhas;

     public function getNome(){
            
            return $this->nome;
        }
        public function setNome($nome) : self {

        $this->nome = $nome ;
        return $this;
        }

        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao($descricao) : self {

        $this->descricao = $descricao ;
        return $this;
        }


        public function getGenero(){
            return $this->genero;
        }
        public function setGenero($genero) : self {

        $this->genero = $genero ;
        return $this;
        }


          public function getQuant_folhas(){
            return $this->quant_folhas;
        }
        public function setQuant_folhas($quant_folhas) : self {

        $this->quant_folhas = $quant_folhas ;
        return $this;
        }

    }

?>