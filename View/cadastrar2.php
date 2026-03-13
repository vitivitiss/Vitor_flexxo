<?php

    
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>aula 9</title>
</head>
<body>

     <div class="container">
        <?php
            require "../Includes/topo.php";
        ?>
     <form action="../Services/validar_cadastro2.php"method="post">
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center;">CARROS</h1>
            </div>
        </div>
        <div class="row" style="margin-bottom: 4%;"> 
            <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Nome do carro </label>
                <input type="text" class="form-control" name="nome" placeholder="Nome do carro">
            </div>    
            
            <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">marca do carro </label>
                <input type="text" class="form-control" name="marca" placeholder="Marca do carro ">
            </div> 
            <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Chassi </label>
                <input type="text" class="form-control" name="chassi" placeholder="Chassi do carro" >
            </div> 
             <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Quantidade de Rodas </label>
                <input type="number" class="form-control" name="rodas" placeholder="número de rodas ">
            </div> 
            
        </div>
        <div class="row" style="margin-bottom: 3%;">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary"  style="width:100%;" name="enviar2">enviar</button>
            </div> 
        </div> 
    </form>
    </div>
</body>
</html>


