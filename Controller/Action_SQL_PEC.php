<?php

    require "../Conexao/Conexao.php";
    

    
    class Action_SQL_PEC{

        public function selecionar_PEC($PEC){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare ("SELECT * FROM " . $PEC);
            $stmt->execute();
            
            $resultado = $stmt;

            if($resultado != TRUE){
                echo "<script> alert('Erro ao selecionar'); window.location.href='../../logar.php'; </script>";
             exit;

            }

            return $stmt;
        }

        public function selecionar_id_PEC($PEC,$id){

            

            if(isset($id) && trim($id) && $id != NULL){
                $nova_conexao = new Conexao;
                $stmt = $nova_conexao->conectar_banco()->prepare("SELECT * FROM " . $PEC . " WHERE id = :id");
                $stmt ->bindParam(":id", $id);
                $stmt ->execute();

                $resultado= $stmt;

                if( $resultado != TRUE){
                 echo "<script> alert('Erro ao excluir'); window.location.href='../View/" . $PEC . ".php'; </script>"; 
                    exit;
             exit;
                }

            }else{
                  echo "<script> alert('Erro ao excluir'); window.location.href='../View/" . $PEC . ".php'; </script>"; 
                    exit;
            }
            return $stmt;


        }

        public function inserir_PEC(
        
                $PEC,
                $PEC_VALOR)
            {

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare("INSERT INTO "  .
            $PEC . " (nome)
            VALUES (:nome)");

            $stmt->bindParam(":nome", $PEC_VALOR);
        
            $stmt->execute();

            $resultado = $stmt;

            if($resultado != TRUE){
                echo "<script> alert('Erro ao inserir'); window.location.href='../View/" . $PEC . ".php'; </script>"; 
             exit;

            }else{
                 echo "<script> alert('Sucesso ao inserir'); window.location.href='../View/" . $PEC . ".php'; </script>"; 
             exit;

            }




        }

        public function editar_PEC(
        $id,
        $PEC,
        $nome,){
        
            $nova_conexao = new Conexao;
            if(isset($id) && trim($id) && $id != NULL){
                
                $stmt = $nova_conexao->conectar_banco()->prepare("UPDATE ". $PEC . " SET nome= :nome
                WHERE id = :id");
                $stmt-> bindParam(":nome", $nome);
                $stmt-> bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if(!$resultado){

                    echo "<script> alert('sucesso ao inserir'); window.location.href='../View/editar_PEC.php'; </script>"; 
                    exit;


                }else{
                     echo "<script> alert('sucesso ao editar'); window.location.href='../View/" . $PEC . ".php'; </script>"; 
                    exit;
                }

            }else{
             echo "<script> alert('Erro ao excluir'); window.location.href='..View/" . $PEC . ".php'; </script>"; 
                    exit;
            }


        }

        public function deletar_PEC($PEC, $id){

            

            if(isset($id) && trim($id) && $id != NULL){
                $nova_conexao = new Conexao;
                $stmt = $nova_conexao->conectar_banco()->prepare("DELETE FROM " . $PEC . " WHERE id = :id");
                $stmt ->bindParam(":id", $id);
                $stmt ->execute();

                $resultado= $stmt;

                if( $resultado != TRUE){
                    echo "<script> alert('Erro ao excluir'); window.location.href='../View/" . $PEC . ".php'; </script>"; 
                    exit;
                }else{
                     echo "<script> alert('Sucesso ao excluir'); window.location.href='../View/" . $PEC . ".php'; </script>"; 
                    exit;

                }



            }else{
                 echo "<script> alert('id não encontrado, ao excluir'); window.location.href='../View/" . $PEC . ".php'; </script>"; 
                    exit;
            }




        }

    }

?>