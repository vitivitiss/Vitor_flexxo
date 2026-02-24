<?php

    require "conexao_exemplo.php";
    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $genero = $_POST['genero'];
        $estadoCivil = $_POST['estadoCivil'];
        
        if(empty($nome)){
            echo "<script> alert('Campo Nome do prédio  em branco'); window.location.href='conexao_exemplo.php'; </script>";
        }
        if(empty($idade)){
            echo "<script> alert('Campo idade em branco'); window.location.href='conexao_exemplo.php'; </script>";
        }
         if(empty($sexo)){
            echo "<script> alert('Campo Nome do prédio  em branco'); window.location.href='conexao_exemplo.php'; </script>";
        }
        if(empty($genero)){
            echo "<script> alert('Campo idade em branco'); window.location.href='conexao_exemplo.php'; </script>";
        }
         if(empty($estadoCivil)){
            echo "<script> alert('Campo Estado cívil em branco'); window.location.href='conexao_exemplo.php'; </script>";
        }
        

        $stmt = $pdo->prepare("INSERT INTO pessoas (nome, idade, sexo, genero, estadoCivil) VALUES (:nome, :idade, :sexo, :genero, :estadoCivil)");
        $stmt->bindparam(":nome", $nome);
        $stmt->bindparam(":idade", $idade);
        $stmt->bindparam(":sexo", $sexo);
        $stmt->bindparam(":genero", $genero);
        $stmt->bindparam(":estadoCivil", $estadoCivil);
        $stmt->execute();

        echo "<script> alert('Informações recebidas com sucesso'); window.location.href='Predios.php'; </script>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 9</title>
</head>
<body>
    <form method="post">
        <label > nome: </label>
        <input type ="text" name="nome">
            <br>
        <label > Idade: </label>
        <input type ="text" name="idade">
        <br>
         <label > sexo: </label>
        <input type ="text" name="sexo">
            <br>
        <label > genero: </label>
        <input type ="text" name="genero">
        <br>
         <label > Estado cívil: </label>
        <input type ="text" name="estadoCivil">
         <br>
        <button type="submit" name="enviar">Enviar</button>
    </form>
</body>
</html>