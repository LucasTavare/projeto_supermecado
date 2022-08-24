<?php

include('../backend/conexao.php');

try{

        $usuario = $_POST['login'];

        $senha = $_POST['senha'];

        $sql = "SELECT * FROM tb_login WHERE email = '$usuario' AND senha = '$senha';";

        $comando = $con -> prepare($sql);

        $comando -> execute();

        $dados = $comando->fetchALL(PDO::FETCH_ASSOC);

        if($dados != null){

            header('location: ../admin/gerenciar-produtos.php');

        } else {
            header('location: ../admin/login.php');
            echo "usuario ou senha invalida";
        }
        
}catch(PDOException $erro){
    echo $erro -> getMessage();
}




    


?>