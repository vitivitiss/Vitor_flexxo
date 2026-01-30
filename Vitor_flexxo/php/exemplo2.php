<?php

    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        echo "nome: " . $nome . "<br>" . 
             "idade: " . $idade  . " anos";

    }else{
    echo "por favor, faça o minimo e coloque a informação";

    }
?>