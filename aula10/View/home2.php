<?php

    require "../Conexao/conexao.php";
    require "../Controller/Action_SQL2.php";

    $nova_selecao = new Action_SQL2;
    $resultado = $nova_selecao->selecionar();


?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Aula 10</title>
    </head>

        <body>
        
    <div class="container">
    <?php
    require "../Includes/topo.php";
    ?>

    <h1 style="margin-bottom: 3%; margin-top: 3%; text-align: center;">Carros Cadastrados</h1>
    <table class="table table-dark table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Marca</th>
        <th scope="col">Chassi</th>
        <th scope="col">Rodas</th>
        <th scope="col">Ações</th>
       
        
        </tr>
    </thead>
    <tbody>
        <?php while($row = $resultado->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?=   $row['id'] ?></td>   
            <td><?=   $row['nome'] ?></td>
            <td><?=   $row['marca'] ?></td>   
            <td><?=   $row['chassi'] ?></td>   
            <td><?=   $row['rodas'] ?></td>   
       
            <td> <a class="btn btn-primary" href="editar2.php?id=<?= $row['id'] ?>">EDITAR </a>    
            <a class="btn btn-danger" href="../Services/deletar2.php? id=<?= $row['id'] ;?>" onclick="return confirm('Você tem certeza?')"> DELETAR </a></td>      
        </tr>

        <?php endwhile; ?>
        </tbody>
    </table>

    </div>

    </body>