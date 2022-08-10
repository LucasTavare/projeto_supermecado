<?php

include '../backend/conexao.php';


try{


$produto = $_POST['produto'];
$valor = $_POST['valor'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];

$sql = "INSERT INTO
                tb_produtos
                (
                    `produto`,
                    `valor`,
                    `tipo`,
                    `marca`
                )VALUES
                (
                    '$produto',
                    '$valor',
                    '$tipo',
                    '$marca'
                )
        ";

        $comando = $con->prepare($sql);

        $comando -> execute();

        echo "Cadastro realizado com sucesso!";

        $con = null;

    }catch(PDOException $e){
        echo $erro->getMessage();
        die();
    }


?>