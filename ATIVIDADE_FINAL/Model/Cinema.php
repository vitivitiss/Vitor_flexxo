<?php

    class Cinema{
    
    private $filmes;
    private $descricao;
    private $status;
    private $pessoa;
    private $ano;
    private $classificacao;
    private $diretor;
    private $genero;
    private $sinopse;


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
        public function getAno(){
        return $this->ano;
    }
    public function setAno($ano) : self {

    $this->ano = $ano ;
    return $this;
    }  
    
    public function getClassificacao(){
        return $this->classificacao;
    }
    public function setClassificacao($classificacao) : self {

    $this->classificacao = $classificacao ;
    return $this;
    }
      public function getDiretor(){
        return $this->diretor;
    }
    public function setDiretor($diretor) : self {

    $this->diretor = $diretor ;
    return $this;
    }
      public function getGenero(){
        return $this->genero;
    }
    public function setGenero($genero) : self {

    $this->genero = $genero ;
    return $this;
    }
      public function getSinopse(){
        return $this->sinopse;
    }
    public function setSinopse($sinopse) : self {

    $this->sinopse = $sinopse ;
    return $this;
    }

    }

?>