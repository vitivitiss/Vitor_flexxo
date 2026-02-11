<?php

if(isset($_POST['enviar']) ) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $estado = $_POST['estado'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];


    if(empty($nome)){

        echo "<script>alert('nome em branco'); window.location.href='cadastro.php';</script>";

    }
    if(empty($idade) ){

        echo "<script>alert('idade em branco'); window.location.href='cadastro.php';</script>";

    }
    if(empty($rg) ){

        echo "<script>alert('rg em branco'); window.location.href='cadastro.php';</script>";

    } 
    if(empty($cpf) ){

        echo "<script>alert('cpf em branco'); window.location.href='cadastro.php';</script>";

    } 
    if(empty($estado) ){

        echo "<script>alert('estado em branco'); window.location.href='cadastro.php';</script>";

    } 
    if(empty($bairro) ){

        echo "<script>alert('bairro em branco'); window.location.href='cadastro.php';</script>";

    } 
    if(empty($numero) ){

        echo "<script>alert('numero em branco'); window.location.href='cadastro.php';</script>";

    }
    echo"nome: " . $nome . "<br>" .
        "idade: " . $idade . "<br>" .
        "rg: " . $rg . "<br>" .
        "cpf: " . $cpf . "<br>" .
        "estado civil: " . $estado . "<br>" .
        "bairro: " . $bairro . "<br>"  .
        "numero: " . $numero . "<br>" ;
       
}else {
    echo "<script>alert('por favor, clique no botao '); window.location.href='cadastro.php';</script>";
}





?>