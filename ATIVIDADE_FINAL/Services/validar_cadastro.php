<?php

    require "../Model/Cinema.php";
    require "../Controller/Action_SQL.php";

    $novo_filme = new Cinema;
    $nova_insercao = new Action_SQL;

    if(isset($_POST['enviar'])){

    $filmes = $_POST['filmes'];
    $descricao = $_POST['descricao'];
    $status= $_POST['status'];
    $pessoa = $_POST['pessoa'];
    $sinopse = $_POST['sinopse'];
    $ano = $_POST['ano'];
    $genero = $_POST['genero'];
    $classificacao= $_POST['classificacao'];
    $diretor= $_POST['diretor'];




    

    if(empty(trim($filmes))){

        echo "<script> alert('Campo Nome em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    if(empty(trim($descricao))){

        echo "<script> alert('Campo Descrição em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    
    if(empty(trim($status))){

        echo "<script> alert('Campo status em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    
    if(empty(trim($pessoa))){

        echo "<script> alert('Campo atual dono em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    if(empty(trim($sinopse))){

        echo "<script> alert('Campo sinopse em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    if(empty(trim($ano))){

        echo "<script> alert('Campo ano em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    if(empty(trim($genero))){

        echo "<script> alert('Campo gênero em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    if(empty(trim($classificacao))){

        echo "<script> alert('Campo classificação em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    if(empty(trim($diretor))){

        echo "<script> alert('Campo diretor em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
        

    

    $novo_filme->setFilmes($filmes);
    $novo_filme->setDescricao($descricao);
    $novo_filme->setStatus($status);
    $novo_filme->setPessoa($pessoa);
    $novo_filme->setSinopse($sinopse);
    $novo_filme->setAno($ano);
    $novo_filme->setGenero($genero);
    $novo_filme->setClassificacao($classificacao);
    $novo_filme->setDiretor($diretor);

   
    }else {

         echo "<script> alert('Aperte no botão'); window.location.href='../View/home.php'; </script>";
         exit;

    }

   
    
   
    

    if($novo_filme->getFilmes() != "" &&
    $novo_filme->getDescricao() != "" &&
    $novo_filme->getStatus() != "" &&
    $novo_filme->getPessoa() != "" &&
    $novo_filme->getSinopse() != "" &&
    $novo_filme->getAno() != "" &&
    $novo_filme->getGenero() != "" &&
    $novo_filme->getClassificacao() != "" &&
    $novo_filme->getDiretor() != "") {


        $nova_insercao->inserir(

            $novo_filme->getFilmes(),
            $novo_filme->getDescricao(),
            $novo_filme->getStatus(),
            $novo_filme->getPessoa(),
            $novo_filme->getSinopse(),
            $novo_filme->getAno(),
            $novo_filme->getGenero(),
            $novo_filme->getClassificacao(),
            $novo_filme->getDiretor()         
        );
    }
    else{

         echo "<script> alert('Preencha todos os campos'); window.location.href='../View/cadastrar.php'; </script>";
         exit;
     }

?>
