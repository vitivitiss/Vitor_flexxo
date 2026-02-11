<?php

if(isset($_POST['enviar']) ) {
    $razao = $_POST['razao'];
    $cnpj = $_POST['cnpj'];
    $inscricao = $_POST['inscricao'];
    $logradouro = $_POST['logradouro'];
    $bairro = $_POST['bairro'];
    $municipio = $_POST['municipio'];
    $uf = $_POST['uf'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];


    if(empty($razao)){

        echo "<script>alert('Razão social em branco'); window.location.href='tela4.php';</script>";

    }
    if(empty($cnpj) ){

        echo "<script>alert('cnpj em branco'); window.location.href='tela4.php';</script>";

    }
    
    if(empty($inscricao) ){

        echo "<script>alert('Inscrição Estadual em branco'); window.location.href='tela4.php';</script>";

    } 
    if(empty($logradouro) ){

        echo "<script>alert('Logradouro em branco'); window.location.href='tela4.php';</script>";

    } 
    if(empty($bairro) ){

        echo "<script>alert('Bairro em branco'); window.location.href='tela4.php';</script>";

    } 
    if(empty($municipio) ){

        echo "<script>alert('Município em branco'); window.location.href='tela4.php';</script>";

    }
    if(empty($uf) ){

        echo "<script>alert('UF em branco'); window.location.href='tela4.php';</script>";

    } 
    if(empty($cep) ){

        echo "<script>alert('CEP em branco'); window.location.href='tela4.php';</script>";

    }
    if(empty($telefone) ){

        echo "<script>alert('telefone em branco'); window.location.href='tela4.php';</script>";}
    if(empty($email) ){

        echo "<script>alert('email em branco'); window.location.href='tela4.php';</script>";
        }


    echo"Razão social: " . $razao . "<br>" .
        "CNPJ: " . $cnpj . "<br>" .
        "telefone: " . $inscricao . "<br>" .
        "Logradouro: " . $logradouro . "<br>" .
        "Bairro: " . $bairro . "<br>" .
        "Município: " . $municipio . "<br>"  .
        "UF: " . $uf . "<br>" .
        "CEP: " . $bairro . "<br>"  .
        "Telefone: " . $telefone . "<br>" .
        "E-mail: " . $email . "<br>" ;
       
}else {
    echo "<script>alert('por favor, clique no botao '); window.location.href='tela4.php';</script>";
}





?>