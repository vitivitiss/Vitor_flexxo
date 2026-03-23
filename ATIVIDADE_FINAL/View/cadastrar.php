<?php


  session_start();
  //Verifica se o usuario esta logado e o manda de volta para o arquivo de login caso não esteja
  if($_SESSION['logado'] == FALSE){

    echo "<script> alert('Por favor, faça o login'); window.location.href='../index.php'; </script>";

  }


    
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
     <form action="../Services/validar_cadastro.php"method="post">
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center;">Cadastro de novos filmes</h1>
            </div>
        </div>
        <div class="row" style="margin-bottom: 4%;"> 
            <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Título  </label>
                <input type="text" class="form-control" name="filmes" placeholder="Título do filme">
            </div>    
              <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Diretor</label>
                <input type="text" class="form-control" name="diretor" placeholder="Diretor">
            </div> 
            <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Sinopse</label>
                <input type="text" class="form-control" name="sinopse" placeholder="Sinopse">
            </div> 
            <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Status  </label>
                <input type="text" class="form-control" name="status" placeholder="Status" >
                
            </div> 
             <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Atual dono </label>
                <input type="text" class="form-control" name="pessoa" placeholder="Atual dono">
            </div> 
            <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Ano </label>
                <input type="number" class="form-control" name="ano" placeholder="Ano do filme" >
            </div> 
             <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Gênero </label>
                <input type="text" class="form-control" name="genero" placeholder="Gênero">
            </div> 
            <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Classificação indicativa</label>
                <input type="number" class="form-control" name="classificacao" placeholder="Classificação" >
            </div> 
           
           
             
            <div class="col-md-12">
                <label for="exampleFormControlInput1" class="form-label">descrição  </label>
                <input type="text" class="form-control" name="descricao" placeholder="Descrição do filme ">
            </div> 
            
        </div>
        <div class="row" style="margin-bottom: 3%;">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary"  style="width:100%;margin-bottom: 25%;" name="enviar">enviar</button>
            </div> 
        </div> 
    </form>
        <?php 

            require "../Includes/rodape.php";
        
        ?>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js&quot; integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js&quot; integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>


