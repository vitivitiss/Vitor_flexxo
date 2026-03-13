<?php

    class Action_SQL2{

        public function selecionar(){

            require "../Conexao/conexao.php";

            $stmt = $pdo->prepare("SELECT * FROM car");
            $stmt->execute();
            
            $resultado = $stmt;

            if($resultado != TRUE){
                echo "<script> alert('Erro ao selecionar'); window.location.href='../../logar.php'; </script>";
             exit;

            }

            return $stmt;
        }

        public function selecionar_id($id){

            require "../Conexao/conexao.php";

            if(isset($id) && trim($id) && $id != NULL){
 
                $stmt = $pdo->prepare("SELECT * FROM car WHERE id = :id");
                $stmt ->bindParam(":id", $id);
                $stmt ->execute();

                $resultado= $stmt;

                if( $resultado != TRUE){
                echo "<script> alert('Erro ao selecionar'); window.location.href='../View/home2.php'; </script>"; 
             exit;
                }

            }else{
                 echo "<script> alert('ID não encontrado ou inválido'); window.location.href='../View/home2.php'; </script>"; 
                    exit;
            }
            return $stmt;


        }

        public function inserir(
        $nome,
        $marca,
        $chassi, 
        $rodas){

            require "../Conexao/conexao.php";
            $stmt = $pdo->prepare("INSERT INTO
            car (nome, marca, chassi, rodas)
            VALUES (:nome, :marca, :chassi, :rodas)");

            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":marca", $marca);
            $stmt->bindParam(":chassi", $chassi);
            $stmt->bindParam(":rodas", $rodas);
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
        $marca, 
        $chassi, 
        $rodas){

            require "../Conexao/conexao.php";
            if(isset($id) && trim($id) && $id != NULL){
                
                $stmt = $pdo->prepare("UPDATE car SET nome= :nome, marca= :marca, chassi = :chassi, rodas = :rodas 
                WHERE id = :id");
                $stmt-> bindParam(":nome", $nome);
                $stmt-> bindParam(":marca", $marca);
                $stmt-> bindParam(":chassi", $chassi);
                $stmt-> bindParam(":rodas", $rodas);
                $stmt-> bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if(!$resultado){

                    echo "<script> alert('sucesso ao editar'); window.location.href='../View/editar2.php'; </script>"; 
                    exit;


                }else{
                    echo "<script> alert('sucesso ao editar'); window.location.href='../View/home2.php'; </script>"; 
                    exit;
                }

            }else{
                 echo "<script> alert('ID não encontrado ou inválido'); window.location.href='../View/home2.php'; </script>"; 
                    exit;
            }


        }

        public function deletar($id){

           require "../Conexao/conexao.php";

            if(isset($id) && trim($id) && $id != NULL){

                $stmt = $pdo->prepare("DELETE FROM car WHERE id = :id");
                $stmt ->bindParam(":id", $id);
                $stmt ->execute();

                $resultado= $stmt;

                if( $resultado != TRUE){
                    echo "<script> alert('Erro ao excluir'); window.location.href='../View/home2.php'; </script>"; 
                    exit;
                }else{
                    echo "<script> alert('Sucesso ao excluir'); window.location.href='../View/home2.php'; </script>"; 
                    exit;

                }



            }else{
                echo "<script> alert('ID não encontrado ou inválido'); window.location.href='../View/home2.php'; </script>"; 
                exit;
            }




        }

    }

?>