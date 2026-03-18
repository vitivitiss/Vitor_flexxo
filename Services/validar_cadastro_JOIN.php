<?php

    require "../Model/Regioes.php";
    require "../Controller/Action_SQL_PEC.php";

    $nova_regiao = new Regioes;
    $nova_insercao = new Action_SQL_PEC;

    if(isset($_POST['enviar'])){

    $nome_pais = $_POST['nome_pais'];
    $nome_estado = $_POST['nome_estado'];
    $nome_cidade = $_POST['nome_cidade'];
    

    if(empty(trim($nome_pais))){

        echo "<script> alert('Campo pais Nome em branco'); window.location.href='../View/regioes.php'; </script>";
             exit;
        }
    if(empty(trim($nome_estado))){

        echo "<script> alert('Campo estado em branco'); window.location.href='../View/regioes.php'; </script>";
             exit;
        }
    
    if(empty(trim($nome_cidade))){

        echo "<script> alert('Campo cidade em branco'); window.location.href='../View/regioes.php'; </script>";
             exit;
        }
    
    $nova_regiao->setPais($nome_pais);
    $nova_regiao->setEstado($nome_estado);
    $nova_regiao->setCidade($nome_cidade);
    

   
    }else {

         echo "<script> alert('Aperte no botão'); window.location.href='../View/regioes.php'; </script>";
         exit;

    }

   
    
   
    

    if($nova_regiao->getPais() !="" &&
    $nova_regiao->getEstado() !="" &&
    $nova_regiao->getCidade()){


        $nova_insercao->inserir_JOIN(

            $nova_regiao->getPais(),
            $nova_regiao->getEstado(),
            $nova_regiao->getCidade());

    }


    

?>

