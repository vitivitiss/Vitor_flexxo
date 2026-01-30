<?php require "topo.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="estiloprojeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>exercício 2</title>
  </head>
  <body id="caixacadastro">
    <form action="cadastro_action.php" method="post">
    <div  class="container">

    
        <div class="row">
            <div class="col-md-12">
                <h1 id="caixacadastro2">Cadastro pessoal</h1>
            </div>
        </div>
        <div class="row" > 
            <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">nome</label>
                <input type="text" class="form-control" name="nome" >
            </div>    
            
            <div class="col-md-1">
                <label for="exampleFormControlInput1" class="form-label">idade </label>
                <input type="text" class="form-control" name="idade">
            </div> 
        </div> 
        <div class="row">
            <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">rg</label>
                <input type="text" class="form-control" name="rg">
            </div> 
             <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">CPF </label>
                <input type="text" class="form-control" name="cpf">
            </div> 
            <div class="col-md-1">
                <label for="exampleFormControlInput1" class="form-label">estado civil </label>
                <input type="text" class="form-control" name="estado">

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">bairro </label>
                <input type="text" class="form-control" name="bairro">
            </div>
            <div class="col-md-1">
                <label for="exampleFormControlInput1" class="form-label">N </label>
                <input type="text" class="form-control" name="numero">
            </div>
        </div>
       

        <div class="row" style="margin-top: 3%;">
            <div class="col-md-4">
            <button  name="enviar" class="btn btn-primary" style="width:100%; background-color: black;" > enviar </button>
            </div> 
        </div> 
    </form>

    </div>
    
   
  </body>
 
    

</html>