<?php

    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $estadocivil = $_POST['estadocivil'];

        echo "nome: " . $nome . "<br>" . 
             "idade: " . $idade  .  "<br>" .
             "sexo: " . $sexo . "<br>" . 
             "idade: " . $estadocivil  . ;

    }else{
    echo "por favor, faça o minimo e coloque a informação";

    }
?>