<?php

if(isset($_POST['enviar']) ) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $nivel = $_POST['nivel'];
    $senha = $_POST['senha'];
    $status = $_POST['status'];
    


    if(empty($nome)){

        echo "<script>alert('Nome em branco'); window.location.href='tela2.php';</script>";

    }
    if(empty($email) ){

        echo "<script>alert('Email em branco'); window.location.href='tela2.php';</script>";

    }
    if(empty($cpf) ){

        echo "<script>alert('CPF em branco'); window.location.href='tela2.php';</script>";

    } 
    if(empty($endereco) ){

        echo "<script>alert('Endereço em branco'); window.location.href='tela2.php';</script>";

    } 
    if(empty($nivel) ){

        echo "<script>alert('Nível em branco'); window.location.href='tela2.php';</script>";

    } 
    if(empty($senha) ){

        echo "<script>alert('Senha em branco'); window.location.href='tela2.php';</script>";

    } 
    if(empty($status) ){

        echo "<script>alert('Status em branco'); window.location.href='tela2.php';</script>";

    }
    
    echo"nome: " . $nome . "<br>" .
        "email: " . $email . "<br>" .
        "telefone: " . $cpf . "<br>" .
        "celular: " . $endereco . "<br>" .
        "nivel: " . $nivel . "<br>" .
        "endereço: " . $senha . "<br>"  .
        "status: " . $status . "<br>" ;
       
}else {
    echo "<script>alert('por favor, clique no botao '); window.location.href='tela2.php';</script>";
}





?>