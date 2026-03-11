<?php

    require "../Model/Carros.php";
    require "../Controller/Action_SQL2.php";

    $atualizar_carros = new Carros;
    $nova_atualizacao = new Action_SQL2;

    

    if(isset($_POST['editar2'])){
    $id= $_POST['id'];
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $chassi = $_POST['chassi'];
    $rodas = $_POST['rodas'];

    if(empty(trim($nome))){

        echo "<script> alert('Campo Nome em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    if(empty(trim($marca))){

        echo "<script> alert('Campo Descrição em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    
    if(empty(trim($chassi))){

        echo "<script> alert('Campo gênero em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    
    if(empty(trim($rodas))){



        echo "<script> alert('Campo quantidades de folhas em branco'); window.location.href='../View/cadastrar.php'; </script>";
             exit;
        }
    

    

    $atualizar_carros ->setNome($nome);
    $atualizar_carros ->setMarca($marca);
    $atualizar_carros ->setChassi($chassi);
    $atualizar_carros ->setrodas($rodas);
    }else {

         echo "<script> alert('Aperte no botão'); window.location.href='../View/home.php'; </script>";
         exit;

    }

   
    
   
    

    if($atualizar_carros ->getNome() !="" &&
    $atualizar_carros ->getMarca() !="" &&
    $atualizar_carros ->getChassi() != "" &&
    $atualizar_carros ->getRodas());


        $nova_atualizacao->editar(
            $id,
            $atualizar_carros->getNome(),
            $atualizar_carros->getMarca(),
            $atualizar_carros->getChassi(),
            $atualizar_carros->getRodas()
        );

?>