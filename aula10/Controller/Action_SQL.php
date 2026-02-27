<?php

    class Action_SQL{

        public function selecionar(){

            require "../Conexao/conexao.php";

            $stmt = $pdo->prepare("SELECT * FROM livros");
            $stmt->execute();
            
            $resultado = $stmt;

            if($resultado != TRUE){
                echo "<script> alert('Erro ao selecionar'); window.location.href='../../logar.php'; </script>";
             exit;

            }

            return $stmt;
        }

        public function selecionar_id(){}

        public function inserir(
        $nome,
        $descricao,
        $genero, 
        $quant_folhas){

            require "../Conexao/conexao.php";
            $stmt = $pdo->prepare("INSERT INTO
            livros (nome, descricao, genero, quant_folhas)
            VALUES (:nome, :descricao, :genero, :quant_folhas)");

            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":genero", $genero);
            $stmt->bindParam(":quant_folhas", $quant_folhas);
            $stmt->execute();

            $resultado = $stmt;

            if($resultado != TRUE){
                echo "<script> alert('Erro ao inserir'); window.location.href='../View/cadastrar.php'; </script>"; 
             exit;

            }else{
                 echo "<script> alert('sucesso ao inserir'); window.location.href='../View/cadastrar.php'; </script>"; 
             exit;

            }




        }

        public function editar(){}

        public function deletar(){}

    }

?>