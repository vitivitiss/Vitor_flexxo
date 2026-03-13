<?php

    require "../Model/Livros.php";
    require "../Controller/Action_SQL.php";

    $atualizar_livro = new Livros;
    $nova_atualizacao = new Action_SQL;

    

    if(isset($_POST['editar'])){
    $id= $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $genero = $_POST['genero'];
    $quant_folhas = $_POST['quant_folhas'];

    if(empty(trim($nome))){

        echo "<script> alert('Campo Nome em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    if(empty(trim($descricao))){

        echo "<script> alert('Campo Descrição em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    
    if(empty(trim($genero))){

        echo "<script> alert('Campo gênero em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    
    if(empty(trim($quant_folhas))){



        echo "<script> alert('Campo quantidades de folhas em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    

    

    $atualizar_livro ->setNome($nome);
    $atualizar_livro ->setDescricao($descricao);
    $atualizar_livro ->setGenero($genero);
    $atualizar_livro ->setQuant_folhas($quant_folhas);
    }else {

         echo "<script> alert('Aperte no botão'); window.location.href='../View/home.php'; </script>";
         exit;

    }

   
    
   
    

    if($atualizar_livro ->getNome() !="" &&
    $atualizar_livro ->getDescricao() !="" &&
    $atualizar_livro ->getGenero() != "" &&
    $atualizar_livro ->getQuant_folhas());


        $nova_atualizacao->editar(
            $id,
            $atualizar_livro->getNome(),
            $atualizar_livro->getDescricao(),
            $atualizar_livro->getGenero(),
            $atualizar_livro->getQuant_folhas()
        );

?>