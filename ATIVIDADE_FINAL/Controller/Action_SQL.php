<?php

    require "../Conexao/Conexao.php";
    

    
    class Action_SQL{

        public function selecionar(){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare ("SELECT * FROM info");
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
                $stmt = $nova_conexao->conectar_banco()->prepare("SELECT * FROM info WHERE id = :id");
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
        $filmes,
        $descricao,
        $status, 
        $pessoa){

            $nova_conexao = new Conexao;
            $stmt = $nova_conexao->conectar_banco()->prepare("INSERT INTO
            info (filmes, descricao, status, pessoa)
            VALUES (:filmes, :descricao, :status, :pessoa)");

            $stmt->bindParam(":filmes", $filmes);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":status", $status);
            $stmt->bindParam(":pessoa", $pessoa);
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
        $filmes,
        $descricao, 
        $status, 
        $pessoa){

            $nova_conexao = new Conexao;
            if(isset($id) && trim($id) && $id != NULL){
                
                $stmt = $nova_conexao->conectar_banco()->prepare("UPDATE info SET filmes= :filmes, descricao= :descricao, status = :status, pessoa = :pessoa 
                WHERE id = :id");
                $stmt-> bindParam(":filmes", $filmes);
                $stmt-> bindParam(":descricao", $descricao);
                $stmt-> bindParam(":status", $status);
                $stmt-> bindParam(":pessoa", $pessoa);
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
                $stmt = $nova_conexao->conectar_banco()->prepare("DELETE FROM info WHERE id = :id");
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