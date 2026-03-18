
<?php

    require "../Controller/Action_SQL_PEC.php";

    $id = $_GET['id'];
    $PEC_RECEBIDO = $_GET['PEC_ENVIADO'];

    $nova_selecao = new Action_SQL_PEC;
    $requisicao = $nova_selecao->selecionar_id_PEC($PEC_RECEBIDO, $id);
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

        <title>Aula 11</title>
    </head>
    <body>

    <div class="container">

        <form action="../Services/validar_editar_PEC.php" method="post">

            <input type="hidden"name="id" value="<?=htmlspecialchars($id)?>">
            <input type="hidden"name="PEC_ENVIADO" value="<?=htmlspecialchars($PEC_RECEBIDO)?>">

                <div class="row">
                    <div class="col-md-12">
                        <h1 style="text-align: center;">Editar <?=  $PEC_RECEBIDO?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome" value="<?= 
                        htmlspecialchars($resultado['nome']) ?>">
                    </div>  
              
                </div>  
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-warning" style="width: 100%; margin-top: 3%;" name="editar">Editar <?=  $PEC_RECEBIDO?></button>
                    </div>
                </div>
        </form>
    </div>