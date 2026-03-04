


<?php
    require "../Model/Carros.php";
    require "../Controller/Action_SQL2.php";

    $novo_carro = new Carros;
    $nova_insercao = new Action_SQL2;



    if(isset($_POST['enviar2'])){
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $chassi = $_POST['chassi'];
    $rodas = $_POST['rodas'];
    if(empty(trim($nome))){

        echo "<script> alert('Campo nome em branco'); window.location.href='../View/cadastrar2.php'; </script>";
             exit;
        }
    
    if(empty(trim($marca))){

        echo "<script> alert('Campo marca em branco'); window.location.href='../View/cadastrar2.php'; </script>";
             exit;
        }
        if(empty(trim($chassi))){

        echo "<script> alert('Campo chassi em branco'); window.location.href='../View/cadastrar2.php'; </script>";
             exit;
        }
    
    if(empty(trim($rodas))){

        echo "<script> alert('Campo quantidades de rodas em branco'); window.location.href='../View/cadastrar2.php'; </script>";
             exit;
        }

    $novo_carro->setNome($nome);
    $novo_carro->setMarca($marca);
    $novo_carro->setChassi($chassi);
    $novo_carro->setRodas($rodas);
    }else {

        echo "<script> alert('Aperte no botão'); window.location.href='../View/home2.php'; </script>";
         exit;

    }

    if($novo_carro->getNome() !="" &&
    $novo_carro->getMarca() !="" &&
    $novo_carro->getChassi() != "" &&
    $novo_carro->getRodas());


        $nova_insercao->inserir(

            $novo_carro->getNome(),
            $novo_carro->getMarca(),
            $novo_carro->getChassi(),
            $novo_carro->getRodas()
        );

?>