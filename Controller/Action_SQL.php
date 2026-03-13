<?php

    require "../Conexao/Conexao.php";
    

    
    class Action_SQL{

        public function selecionar(){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare ("SELECT * FROM livros");
            $stmt->execute();
            
            $resultado = $stmt;

            if($resultado != TRUE){
                echo "<script> alert('Erro ao selecionar'); window.location.href='../../logar.php'; </script>";
             exit;

            }

            return $stmt;
        }

        public function selecionar_id($id){

            

            if(isset($id) && trim($id) && $id != NULL){
                $nova_conexao = new Conexao;
                $stmt = $nova_conexao->conectar_banco()->prepare("SELECT * FROM livros WHERE id = :id");
                $stmt ->bindParam(":id", $id);
                $stmt ->execute();

                $resultado= $stmt;

                if( $resultado != TRUE){
                echo "<script> alert('Erro ao selecionar'); window.location.href='../View/home.php'; </script>"; 
             exit;
                }

            }else{
                 echo "<script> alert('ID não encontrado ou inválido'); window.location.href='../View/home.php'; </script>"; 
                    exit;
            }
            return $stmt;


        }

        public function inserir(
        $nome,
        $descricao,
        $genero, 
        $quant_folhas){

            $nova_conexao = new Conexao;
            $stmt = $nova_conexao->conectar_banco()->prepare("INSERT INTO
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

        public function editar($id,
        $nome,
        $descricao, 
        $genero, 
        $quant_folhas){

            $nova_conexao = new Conexao;
            if(isset($id) && trim($id) && $id != NULL){
                
                $stmt = $nova_conexao->conectar_banco()->prepare("UPDATE livros SET nome= :nome, descricao= :descricao, genero = :genero, quant_folhas = :quant_folhas 
                WHERE id = :id");
                $stmt-> bindParam(":nome", $nome);
                $stmt-> bindParam(":descricao", $descricao);
                $stmt-> bindParam(":genero", $genero);
                $stmt-> bindParam(":quant_folhas", $quant_folhas);
                $stmt-> bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if(!$resultado){

                    echo "<script> alert('sucesso ao inserir'); window.location.href='../View/editar.php'; </script>"; 
                    exit;


                }else{
                    echo "<script> alert('sucesso ao inserir'); window.location.href='../View/home.php'; </script>"; 
                    exit;
                }

            }else{
                 echo "<script> alert('ID não encontrado ou inválido'); window.location.href='../View/home.php'; </script>"; 
                    exit;
            }


        }

        public function deletar($id){

            

            if(isset($id) && trim($id) && $id != NULL){
                $nova_conexao = new Conexao;
                $stmt = $nova_conexao->conectar_banco()->prepare("DELETE FROM livros WHERE id = :id");
                $stmt ->bindParam(":id", $id);
                $stmt ->execute();

                $resultado= $stmt;

                if( $resultado != TRUE){
                    echo "<script> alert('Erro ao excluir'); window.location.href='../View/home.php'; </script>"; 
                    exit;
                }else{
                    echo "<script> alert('Sucesso ao excluir'); window.location.href='../View/home.php'; </script>"; 
                    exit;

                }



            }else{
                echo "<script> alert('ID não encontrado ou inválido'); window.location.href='../View/home.php'; </script>"; 
                exit;
            }




        }

    }

?>