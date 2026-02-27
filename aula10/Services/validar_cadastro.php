<?php

    require "../Model/Livros.php";
    require "../Controller/Action_SQL.php";

    $novo_livro = new Livros;
    $nova_insercao = new Action_SQL;

    if(isset($_POST['enviar'])){

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
    

    

    $novo_livro->setNome($nome);
    $novo_livro->setDescricao($descricao);
    $novo_livro->setGenero($genero);
    $novo_livro->setQuant_folhas($quant_folhas);
    }else {

         echo "<script> alert('Aperte no botão'); window.location.href='../View/home.php'; </script>";
         exit;

    }

   
    
   
    

    if($novo_livro->getNome() !="" &&
    $novo_livro->getDescricao() !="" &&
    $novo_livro->getGenero() != "" &&
    $novo_livro->getQuant_folhas());


        $nova_insercao->inserir(

            $novo_livro->getNome(),
            $novo_livro->getDescricao(),
            $novo_livro->getGenero(),
            $novo_livro->getQuant_folhas()
        );

?>