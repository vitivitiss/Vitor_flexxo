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


    <form action="tela_funcional3.php" method="post">
    <div  class="container">

        <div class="row" > 
            <div class="col-md-12">
                <label for="exampleFormControlInput1" class="form-label">Nome do cliente</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome do cliente">
            </div>         
        </div> 
        <div class="row" > 
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">CPF</label>
                <input type="number" class="form-control" name="cpf" placeholder="000.000.000.00">
            </div> 
              <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Data de nascimento</label>
                <input type="date" class="form-control" name="data">
              </div>
              <div class="col-md-4">
                    
                <div class="row" style="margin-bottom: 2%;">
                    <label class="form-label">Sexo</label> 
                </div>
                <div class="form-check form-check-inline " >
                    <input class="form-check-input" type="radio" name="sexo" value="Masculino">
                    <label class="form-check-label" for="inlineRadio1">Masculino</label>
                </div>

                    <div class="form-check form-check-inline">
                        
                    <input class="form-check-input" type="radio" name="sexo" value="Feminino">
                    <label class="form-check-label" for="inlineRadio2">Feminino</label>
                </div> 
                </div>
                <div class="col-md-6">
                        <label class="form-label"> Estado Cívil </label>
                        <select class="form-select" name="estado">
                            <option value="" selected> Estado Civil </option>
                            <option value="Masculino">solteiro</option>
                            <option value="Feminino">casado</option>
                    </select>
                </div> 
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">Renda mensal</label>
                        <input type="number" class="form-control" name="renda" placeholder="0.00">
                    </div>

        <div class="row" style="margin-top: 3%;">
            <div class="col-md-2">
            <button  name="enviar" class="btn btn-primary" style="width:100%; background-color: blue;  " > cadastrar </button>
            </div> 
        </div> 
    
  </body>
</html>