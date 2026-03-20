<?php

    class Cinema{
    
    private $filmes;
    private $descricao;
    private $status;
    private $pessoa;

    public function getFilmes(){
            
        return $this->filmes;
    }
    public function setFilmes($filmes) : self {

    $this->filmes = $filmes ;
    return $this;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao) : self {

    $this->descricao = $descricao ;
    return $this;
    }


    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status) : self {

    $this->status = $status ;
    return $this;
    }


        public function getPessoa(){
        return $this->pessoa;
    }
    public function setPessoa($pessoa) : self {

    $this->pessoa = $pessoa ;
    return $this;
    }

    }

?>