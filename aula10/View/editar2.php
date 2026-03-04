<?php

    require "../Controller/Action_SQL2.php";

    $id = $_GET['id'];

    $nova_selecao = new Action_SQL2;
    $requisicao = $nova_selecao->selecionar_id($id);
    $resultado = $requisicao->fetch(PDO::FETCH_ASSOC);


?>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="estilo_projeto.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Aula 8</title>
    </head>
    <body>

    <div class="container">

        <form action="../Services/validar_editar2.php" method="post">

            <input type="hidden"name="id" value="<?=htmlspecialchars($id)?>">

                <div class="row">
                    <div class="col-md-12">
                        <h1 style="text-align: center;">Editar Carro</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Nome do carro</label>
                        <input type="text" class="form-control" name="nome" value="<?= 
                        htmlspecialchars($resultado['nome']) ?>">
                    </div>  
              
                    <div class="col-md-6">
                        <label>Marca do carro</label>
                        <input type="text" class="form-control" name="marca" value="<?= htmlspecialchars($resultado['marca']) ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Chassi</label>
                        <input type="text" class="form-control" name="chassi" value="<?= htmlspecialchars($resultado['chassi']) ?>">
                    </div>
                    <div class="col-md-6">
                        <label>Quantidade de Rodas</label>
                        <input type="text" class="form-control" name="rodas" value="<?= htmlspecialchars($resultado['rodas']) ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-warning" style="width: 100%; margin-top: 3%;" name="editar2">Editar</button>
                    </div>
                </div>
        </form>
    </div>