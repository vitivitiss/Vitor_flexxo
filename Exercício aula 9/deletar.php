<?php 
    require "conexao_exemplo.php";
    if($_GET['id']){
        $id= $_GET['id'];

        $stmt = $pdo->prepare("DELETE FROM trabalho WHERE id = :id");
        $stmt->bindparam(":id", $id);
        $stmt->execute();

        echo "<script> alert('Informações deletadas com sucesso'); window.location.href='home.php'; </script>";

    }else{
        echo "<script> alert('Usuário não encontrado'); window.location.href='home.php'; </script>";
    }
        
?>