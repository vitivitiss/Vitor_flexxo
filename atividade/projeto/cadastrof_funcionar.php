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

        echo "<script>alert('Nome em branco'); window.location.href='cadastrof_funcionar.php';</script>";

    }
    if(empty($email) ){

        echo "<script>alert('Email em branco'); window.location.href='cadastrof_funcionar.php';</script>";

    }
    if(empty($telefone) ){

        echo "<script>alert('Telefone em branco'); window.location.href='cadastrof_funcionar.php';</script>";

    } 
    if(empty($celular) ){

        echo "<script>alert('Celular em branco'); window.location.href='cadastrof_funcionar.php';</script>";

    } 
    if(empty($sexo) ){

        echo "<script>alert('Sexo em branco'); window.location.href='cadastrof_funcionar.php';</script>";

    } 
    if(empty($estado) ){

        echo "<script>alert('Estado em branco'); window.location.href='cadastrof_funcionar.php';</script>";

    } 
    if(empty($cidade) ){

        echo "<script>alert('Cidade em branco'); window.location.href='cadastrof_funcionar.php';</script>";

    }
    if(empty($bairro) ){

        echo "<script>alert('Bairro em branco'); window.location.href='cadastrof_funcionar.php';</script>";

    } 
    if(empty($numero) ){

        echo "<script>alert('Número em branco'); window.location.href='cadastrof_funcionar.php';</script>";

    }
    echo"Nome: " . $nome . "<br>" .
        "Email: " . $email . "<br>" .
        "Telefone: " . $telefone . "<br>" .
        "Celular: " . $celular . "<br>" .
        "Sexo: " . $sexo . "<br>" .
        "Estado: " . $estado . "<br>"  .
        "Cidade: " . $cidade . "<br>" .
        "Bairro: " . $bairro . "<br>"  .
        "Numero: " . $numero . "<br>" ;
       
}else {
    echo "<script>alert('por favor, clique no botao '); window.location.href='cadastrof_funcionar.php';</script>";
}





?>