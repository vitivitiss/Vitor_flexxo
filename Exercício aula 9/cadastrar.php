<?php

    require "conexao_exemplo.php";
    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $comprimento = $_POST['comprimento'];
        $largura = $_POST['largura'];
        $material = $_POST['material'];
        
        if(empty($nome)){
        
        echo "<script> alert('Campo Nome do prédio  em branco'); window.location.href='cadastrar.php'; </script>";
             exit;
        }
        if(empty($tipo)){
            echo "<script> alert('Campo tipo em branco'); window.location.href='cadastrar.php'; </script>";
             exit;
        }
          if(empty($comprimento)){
            echo "<script> alert('Campo comprimento em branco'); window.location.href='cadastrar.php'; </script>";
             exit;
        }
        if(empty($largura)){
            echo "<script> alert('Campo largura em branco'); window.location.href='cadastrar.php'; </script>";
             exit;
        }
        if(empty($material)){
            echo "<script> alert('Campo material em branco'); window.location.href='cadastrar.php'; </script>";
            exit;
        }
          
      
        $stmt = $pdo->prepare("INSERT INTO trabalho (nome, tipo, comprimento, largura, material) VALUES (:nome, :tipo, :comprimento, :largura, :material)");
        $stmt->bindparam(":nome", $nome);
        $stmt->bindparam(":tipo", $tipo);
        $stmt->bindparam(":comprimento", $comprimento);
        $stmt->bindparam(":largura", $largura);
        $stmt->bindparam(":material", $material);
        $stmt->execute();

        echo "<script> alert('Informações recebidas com sucesso'); window.location.href='home.php'; </script>";
    }

?>
<!DOCTYPE html>
<html lang="en">
    <?php
    require "topo.php";
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 9</title>
</head>
<body>

     <div class="container">
     <form method="post">
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center;">Cadastro</h1>
            </div>
        </div>
        <div class="row" style="margin-bottom: 4%;"> 
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Nome </label>
                <input type="text" class="form-control" name="nome">
            </div>    
            
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Tipo </label>
                <input type="text" class="form-control" name="tipo">
            </div> 
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Comprimento </label>
                <input type="text" class="form-control" name="comprimento">
            </div> 
             <div class="col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Largura </label>
                <input type="text" class="form-control" name="largura">
            </div> 
            <div class="col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Material </label>
                <input type="text" class="form-control" name="material">
            </div>
        </div>
        <div class="row" style="margin-bottom: 3%;">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary"  style="width:100%;" name="enviar">enviar</button>
            </div> 
        </div> 
    </form>
    </div>
</body>
</html>