<?php

    require "../Model/Cinema.php";
    require "../Controller/Action_SQL.php";

    $atualizar_filme = new Cinema;
    $nova_atualizacao = new Action_SQL;

    

    if(isset($_POST['editar'])){
    $id= $_POST['id'];
    $nome = $_POST['filmes'];
    $descricao = $_POST['descricao'];
    $genero = $_POST['status'];
    $quant_folhas = $_POST['pessoa'];

    if(empty(trim($filmes))){

        echo "<script> alert('Campo Nome do filme em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    if(empty(trim($descricao))){

        echo "<script> alert('Campo Descrição do filme em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    
    if(empty(trim($status))){

        echo "<script> alert('Campo status em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    
    if(empty(trim($pessoa))){



        echo "<script> alert('Campo atual portador em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    

    

    $atualizar_filme ->setFilmes($filmes);
    $atualizar_filme ->setDescricao($descricao);
    $atualizar_filme ->setStatus($status);
    $atualizar_filme ->setPessoa($pessoa);
    }else {

         echo "<script> alert('Aperte no botão'); window.location.href='../View/home.php'; </script>";
         exit;

    }

   
    
   
    

    if($atualizar_filme ->getFilmes() !="" &&
    $atualizar_filme ->getDescricao() !="" &&
    $atualizar_filme ->getStatus() != "" &&
    $atualizar_filme ->getPessoa() != "");


        $nova_atualizacao->editar(
            $id,
            $atualizar_filme->getFilmes(),
            $atualizar_filme->getDescricao(),
            $atualizar_filme->getStatus(),
            $atualizar_filme->getPessoa()
        );

?>