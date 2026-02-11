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


    <h1 style="text-align: center;">Avaliação</h1>


    <form action="tela_funcional4.php" method="post">
    <div  class="container">

        <div class="row" > 
            <div class="col-md-12">
                
                <input type="text" class="form-control" name="razao" placeholder="razão social">
            </div>    
        </div>
           <div class="row" >  
                <div class="col-md-6">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="number" class="form-control" name="cnpj" placeholder="CNPJ">
                </div>
            
                <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">  </label>
                        <input type="number" class="form-control" name="inscricao" placeholder="Incrição Estadual">
                    </div>
            </div>
            <div class="row" >  
                <div class="col-md-6">
                    <label for="exampleFormControlInput1" class="form-label"> </label>
                    <input type="text" class="form-control" name="logradouro" placeholder="Logradouro">
                </div>
            
                <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" class="form-control" name="bairro" placeholder="Bairro">
                </div>
            </div>
            <div class="row" >  
                <div class="col-md-6">
                    <label for="exampleFormControlInput1" class="form-label"> </label>
                    <input type="text" class="form-control" name="municipio" placeholder="Município">
                </div>
            
                <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">  </label>
                        <input type="text" class="form-control" name="uf" placeholder="UF">
                </div>
            </div>
            <div class="row" >  
                <div class="col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">  </label>
                    <input type="number" class="form-control" name="cep" placeholder="CEP">
                </div>
            
                <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">  </label>
                        <input type="number" class="form-control" name="telefone" placeholder="Telefone">
                    </div>
            </div>
             <div class="row" > 
            <div class="col-md-12">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="email" class="form-control" name="email" placeholder="E-mail">
            </div>    
            </div>

           
            
       
       
        <div class="row" style="margin-top: 3%;">
            <div class="col-md-12">
            <button  name="enviar" class="btn btn-primary"  style="background-color: red; margin-left: 94% ;"> enviar </button>
            </div> 
        </div> 
            
    </div> 
  
       

        
    
  </body>
</html>