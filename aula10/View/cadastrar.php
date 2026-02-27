<?php

    
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 9</title>
</head>
<body>

     <div class="container">
        <?php
            require "../Includes/topo.php";
        ?>
     <form action="../Services/validar_cadastro.php"method="post">
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center;">Cadastro</h1>
            </div>
        </div>
        <div class="row" style="margin-bottom: 4%;"> 
            <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Nome do livro </label>
                <input type="text" class="form-control" name="nome" placeholder="Nome do livro">
            </div>    
            
            <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">descrição do livro </label>
                <input type="text" class="form-control" name="descricao" placeholder="Descrição do livro ">
            </div> 
            <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Genero </label>
                <input type="text" class="form-control" name="genero" placeholder="Genero" >
            </div> 
             <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Quantidade de folhas </label>
                <input type="number" class="form-control" name="quant_folhas" placeholder="Quantidade de folhas ">
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


