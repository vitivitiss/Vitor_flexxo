<?php

    require "../Model/Cinema.php";
    require "../Controller/Action_SQL.php";

    $novo_filme = new Livros;
    $nova_insercao = new Action_SQL;

    if(isset($_POST['enviar'])){

    $filmes = $_POST['filmes'];
    $descricao = $_POST['descricao'];
    $status= $_POST['status'];
    $pessoa = $_POST['pessoa'];

    

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
        
    

    

    $novo_filme->setFilmes($filmes);
    $novo_filme->setDescricao($descricao);
    $novo_filme->setStatus($status);
    $novo_filme->setPessoa($pessoa);

   
    }else {

         echo "<script> alert('Aperte no botão'); window.location.href='../View/home.php'; </script>";
         exit;

    }

   
    
   
    

    if($novo_filme->getFilmes() != "" &&
    $novo_filme->getDescricao() != "" &&
    $novo_filme->getStatus() != "" &&
    $novo_filme->getPessoa() != "");

        $nova_insercao->inserir(

            $novo_filme->getFilmes(),
            $novo_filme->getDescricao(),
            $novo_filme->getStatus(),
            $novo_filme->getPessoa()
        );


    

?>

