<?php
     
    require "conexao_exemplo.php";

    $stmt = $pdo->prepare("SELECT * FROM trabalho");
    $stmt->execute();
    
?>