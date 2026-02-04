<?php

if(isset($_POST['enviar']) ) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $sexo = $_POST['sexo'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];


    if(empty($nome)){

        echo "<script>alert('nome em branco'); window.location.href='tela.php';</script>";

    }
    if(empty($email) ){

        echo "<script>alert('email em branco'); window.location.href='tela.php';</script>";

    }
    if(empty($telefone) ){

        echo "<script>alert('telefone em branco'); window.location.href='tela.php';</script>";

    } 
    if(empty($celular) ){

        echo "<script>alert('celular em branco'); window.location.href='tela.php';</script>";

    } 
    if(empty($sexo) ){

        echo "<script>alert('sexo em branco'); window.location.href='tela.php';</script>";

    } 
    if(empty($estado) ){

        echo "<script>alert('estado em branco'); window.location.href='tela.php';</script>";

    } 
    if(empty($cidade) ){

        echo "<script>alert('cidade em branco'); window.location.href='tela.php';</script>";

    }
    if(empty($bairro) ){

        echo "<script>alert('bairro em branco'); window.location.href='tela.php';</script>";

    } 
    if(empty($numero) ){

        echo "<script>alert('numero em branco'); window.location.href='tela.php';</script>";

    }
    echo"nome: " . $nome . "<br>" .
        "email: " . $email . "<br>" .
        "telefone: " . $telefone . "<br>" .
        "celular: " . $celular . "<br>" .
        "sexo: " . $sexo . "<br>" .
        "estado: " . $estado . "<br>"  .
        "cidade: " . $cidade . "<br>" .
        "bairro: " . $bairro . "<br>"  .
        "numero: " . $numero . "<br>" ;
       
}else {
    echo "<script>alert('por favor, clique no botao '); window.location.href='tela.php';</script>";
}





?>