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


    <h1 style="margin-left: 7%;"> Novo Usuário</h1>


    <form action="tela_funcional2.php" method="post">
    <div  class="container">

        <div class="row" > 
            <div class="col-md-12">
                <label for="exampleFormControlInput1" class="form-label">Nome do Usuário</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome do Usuário">
            </div>             
        </div> 
        <div class="row" > 
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">CPF</label>
                <input type="number" class="form-control" name="cpf" placeholder="CPF">
            </div>
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Endereço</label>
                <input type="text" class="form-control" name="endereco" placeholder="Informe seu endereço">
            </div> 
                <div class="col-md-2">
                    <label class="form-label"> Nível </label>
                    <select class="form-select" name="nivel">
                        <option value=" " selected> Nível </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
        </div>
        <div class="row" > 
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Informe seu email">
            </div>
             <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Senha</label>
                <input type="text" class="form-control" name="senha" placeholder="Informe sua senha">
            </div>
            <div class="col-md-4">
                    <label class="form-label"> Status: </label>
                    <select class="form-select" name="status">
                        <option value=" " selected> Status </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
            



                         
        </div>
       
       

        <div class="row" style="margin-top: 3%; margin-left: 67%;">
            <div class="col-md-1">
            <button  name="enviar"    > enviar </button>
            </div> 
        
            <div class="col-md-1" style="margin-left: 8%;">
            <button  name="cancelar"   > cancelar </button>
            </div> 
        </div> 
    
  </body>
</html>