<?php 
  session_start();
  if($_SESSION['logado'] == FALSE){

  echo "<script>alert('Por favor, faça login'); window.location.href='../index.php';</script>";
  
  }

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>projeto</title>
  </head>
<body id="caixahome">
        
   
    
    <?php
        require "topo.php";
    ?>
    
     <div  id="titulohome" class="container">  
        <h1 id="home">
         Bem-vindo 
        </h1> 

         <h3 id="home">
         Ao site show de bola
        </h3>
        
    </div>

     <ul id= "img"class="nav justify-content-center">
      <li class="nav-item">
       <img src = "Jakesalad.webp" alt="imagem n exibida" id=img >
      </li>


</body>
</html>