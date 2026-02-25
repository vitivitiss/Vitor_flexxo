<?php
    require "conexao_exemplo.php";

    if($_GET['id']){
        $id = $_GET['id'];
        
        if(isset($_POST['editar'])){
            $nome = $_POST['nome'];
            $tipo = $_POST['tipo'];
            $comprimento = $_POST['comprimento'];
            $largura = $_POST['largura'];
            $material = $_POST['material'];

            if(empty(trim($nome))){
                echo "<script> alert('Campo Nome  em branco'); window.location.href='editar.php'; </script>";
            }
            if(empty(trim($tipo))){
                echo "<script> alert('Campo Tipo  em branco'); window.location.href='editar.php'; </script>";
            }
            if(empty(trim($comprimento))){
                echo "<script> alert('Campo Comprimento  em branco'); window.location.href='editar.php'; </script>";
            }
            if(empty(trim($largura))){
                echo "<script> alert('Campo Largura  em branco'); window.location.href='editar.php'; </script>";
            }
            if(empty(trim($material))){
                echo "<script> alert('Campo Material  em branco'); window.location.href='editar.php'; </script>";
            }
            
            
            $stmt = $pdo->prepare("UPDATE trabalho SET nome = :nome, tipo = :tipo, comprimento = :comprimento, largura = :largura, material = :material WHERE id = :id");
            $stmt->bindparam(":nome", $nome);
            $stmt->bindparam(":tipo", $tipo);
            $stmt->bindparam(":comprimento", $comprimento);
            $stmt->bindparam(":largura", $largura);
            $stmt->bindparam(":material", $material);
            $stmt->bindparam(":id", $id);
            $stmt->execute();

            echo "<script> alert('Informações editadas com sucesso'); window.location.href='home.php'; </script>";
        }/*else{
            echo "<script> alert('porfavor aperte no botão'); window.location.href='home.php'; </script>";
        }*/
     }else{
        echo "<script> alert('Usuário não encontrado'); window.location.href='home.php'; </script>";
     }
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="estiloprojeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>exercício 9</title>
  </head>
    
    <div  class="container">
    <form method="post">

    
        <div class="row">
            <div class="col-md-12">
                <h1 id="caixacadastro2">Editar pessoa</h1>
            </div>
        </div>
        <div class="row" > 
            <div class="col-md-6">
                <label for="exampleFormControlInput1" class="form-label">nome</label>
                <input type="text" class="form-control" name="nome" >
            </div>    
            
            <div class="col-md-6">
                <label for="exampleFormControlInput1" class="form-label">tipo </label>
                <input type="text" class="form-control" name="tipo">
            </div> 
            <div class="col-md-6">
                <label for="exampleFormControlInput1" class="form-label">comprimento </label>
                <input type="text" class="form-control" name="comprimento">
            </div> 
            <div class="col-md-6">
                <label for="exampleFormControlInput1" class="form-label">largura </label>
                <input type="text" class="form-control" name="largura">
            </div> 
            <div class="col-md-6">
                <label for="exampleFormControlInput1" class="form-label">material </label>
                <input type="text" class="form-control" name="material">
            </div> 

        </div> 
        <div class="row" style="margin-top: 3%;">
            <div class="col-md-12">
            <button  name="editar" class="btn btn-primary" style="width:100%; background-color: black;" > EDITAR </button>
            </div> 
        </div> 
    </form>

    </div>
    
   
  </body>
 
    

</html>