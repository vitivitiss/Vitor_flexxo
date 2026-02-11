<?php   

session_start();
if(isset($_POST['logar']) ) {

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    if(empty(trim($usuario))){

        echo "<script>alert('usuario em branco'); window.location.href='index.php';</script>";

    }
    if(empty(trim($senha)) ){

        echo "<script>alert('senha em branco'); window.location.href='index.php';</script>";

    }


    if($usuario == "vitor" && $senha == "123a"){

        $_SESSION['logado'] = TRUE;
        header("location: projeto/home.php");

    }else{

        echo "<script>alert('LOGIN ERRADO, BOBÃO'); window.location.href='index.php';</script>";
    
    }
    
       
}





?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="projeto/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Aula 6</title>
  </head>
  <body id="caixalogin">
    

    <div  class="container">

    <form  method="post">

            <div id="espacamento" class="row">
                <div style="text-align: center;"class="col-md-12">
                    <h1> Logar </h1>
                </div>
            </div>
            <div id="espacamento" class="row">
                <div class="col-md-12">
                    <label>Usuário</label>
                    <input type="text" class="form-control" name="usuario">
                </div>
            </div>
            <div id="espacamento" class="row">
                <div class="col-md-12">
                    <label>senha</label>
                    <input type="password" class="form-control" name="senha">
                </div>               
            </div>
            <div id="espacamento" class="row">
                <div class="col-md-12">
                    <button style="width: 100%;" class="btn btn-danger" name="logar">Logar</button>
                </div>
            </div>

    </form>

    </div>