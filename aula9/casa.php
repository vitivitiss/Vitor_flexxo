<?php

    require "Mae.php";
    require "Filho.php";
    require "Filha.php";

    $info_mae = new Mae;
    $info_filho = new Filho;
    $info_filha = new Filha;

    echo "Nome da mãe: " . $info_mae->nome . "<br> " .
        "Altura da mãe: " . $info_mae->altura . "<br> " .
        "Idade da mãe: " . $info_mae->idade . "<br> " ;
         
         
    echo "-------------------------------------";
    echo "<br>";
    echo "Nome do filho: " . $info_filho->nome . "<br> " .
         "Idade do filho: " . $info_filho->idade . "<br> " .
         "Altura do filho: " . $info_filho->altura . "<br> " ;
         
    echo "--------------------------------------";
    echo "<br>";
    echo 
         "Nome da filha: " . $info_filha->nome . "<br> " .
         "Idade da filha: " . $info_filha->idade . "<br> " .
         "Altura da filha: " . $info_filha->altura . "<br> " ;

?>