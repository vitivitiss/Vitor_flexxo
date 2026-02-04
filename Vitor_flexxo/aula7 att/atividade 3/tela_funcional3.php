<?php

if(isset($_POST['enviar']) ) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data = $_POST['data'];
    $sexo = $_POST['sexo'];
    $estado = $_POST['estado'];
    $renda = $_POST['renda'];


    if(empty($nome)){

        echo "<script>alert('nome em branco'); window.location.href='tela3.php';</script>";

    }
    if(empty($cpf) ){

        echo "<script>alert('CPF em branco'); window.location.href='tela3.php';</script>";

    }
    if(empty($data) ){

        echo "<script>alert('data em branco'); window.location.href='tela3.php';</script>";

    } 
    if(empty($sexo) ){

        echo "<script>alert('sexo em branco'); window.location.href='tela3.php';</script>";

    } 
    if(empty($estado) ){

        echo "<script>alert('Estato cívil em branco'); window.location.href='tela3.php';</script>";

    } 
    if(empty($renda) ){

        echo "<script>alert('renda em branco'); window.location.href='tela3.php';</script>";

    } 
    echo"nome: " . $nome . "<br>" .
        "cpf: " . $cpf . "<br>" .
        "data: " . $data . "<br>" .
        "renda: " . $renda . "<br>" .
        "sexo: " . $sexo . "<br>" .
        "estado: " . $estado . "<br>" ;
        
       
}
else {
    echo "<script>alert('por favor, clique no botao '); window.location.href='tela3.php';</script>";
}





?>