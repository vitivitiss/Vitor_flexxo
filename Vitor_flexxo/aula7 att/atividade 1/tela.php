<?php ?>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>atividade 1</title>
  </head>
  <body>


    <h1 style="text-align: center;">Cadastro Fornecedor</h1>


    <form action="tela_funcional.php" method="post">
    <div  class="container">

        <div class="row" > 
            <div class="col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome">
            </div>    
            
            <div class="col-md-6">
                <label for="exampleFormControlInput1" class="form-label"> Email </label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
        </div>
        <div class="row" > 
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label"> Telefone </label>
                <input type="number" class="form-control" name="telefone" placeholder="Telefone">
            </div> 
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label"  > Celular </label>
                <input type="number" class="form-control" name="celular"placeholder="Celular" >
            </div> 
            <div class="col-md-4">
                <label class="form-label"> Sexo </label>
                <select class="form-select" name="sexo">
                    <option value="" selected> Sexo </option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                   
                </select>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-4">
                <label class="form-label"> Estado </label>
                <select class="form-select" name="estado">
                    <option value=" "> Estado </option>
                    <option value="RS">RS</option>
                    <option value="ES">ES</option>
                    <option value="RJ">RJ</option>
                    <option value="SP">SP</option>
                </select>
            </div> 
            <div class="col-md-3">
                <label class="form-label"> Cidade </label>
                <select class="form-select" name="cidade">
                    <option value=" ">Cidade</option>
                    <option value="Gramado">Gramado</option>
                    <option value="Canoas">Canoas</option>
                    <option value="Caxias">Caxias</option>
                    
                </select>
            </div> 
            <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label"> Bairro </label>
                <input type="text" class="form-control" name="bairro" placeholder="Bairro">
            </div> 
            <div class="col-md-2">
                <label for="exampleFormControlInput1" class="form-label"> Numero </label>
                <input type="number" class="form-control" name="numero"
                placeholder="Numero">
            </div> 

            
        </div> 
       
       

        <div class="row" style="margin-top: 3%;">
            <div class="col-md-12">
            <button  name="enviar" class="btn btn-primary" style="width:100%; background-color: green; " > enviar </button>
            </div> 
        </div> 
    
  </body>
</html>