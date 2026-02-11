<?php

if(isset($_POST['enviar']) ) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data = $_POST['data'];
    $sexo = $_POST['sexo'];
    $estado = $_POST['estado'];
    $renda = $_POST['renda'];


    if(empty($nome)){

        echo "<script>alert('Nome em branco'); window.location.href='cadastroc.php';</script>";

    }
    if(empty($cpf) ){

        echo "<script>alert('CPF em branco'); window.location.href='cadastroc.php';</script>";

    }
    if(empty($data) ){

        echo "<script>alert('Data em branco'); window.location.href='cadastroc.php';</script>";

    } 
    if(empty($sexo) ){

        echo "<script>alert('Sexo em branco'); window.location.href='cadastroc.php';</script>";

    } 
    if(empty($estado) ){

        echo "<script>alert('Estato cívil em branco'); window.location.href='cadastroc.php';</script>";

    } 
    if(empty($renda) ){

        echo "<script>alert('Renda em branco'); window.location.href='cadastroc.php';</script>";

    } 
    echo"Nome: " . $nome . "<br>" .
        "CPF: " . $cpf . "<br>" .
        "Data: " . $data . "<br>" .
        "Renda: " . $renda . "<br>" .
        "Sexo: " . $sexo . "<br>" .
        "Estado: " . $estado . "<br>" ;
        
       
}
else {
    echo "<script>alert('por favor, clique no botao '); window.location.href='cadastroc.php';</script>";
}





?>