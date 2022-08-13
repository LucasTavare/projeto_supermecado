<?php

include '../backend/conexao.php';

$id = $_GET['id'];

try{
    $sql = "SELECT * FROM tb_produtos WHERE id = $id;";

    $comando = $con -> prepare($sql);

    $comando -> execute();

    $dados = $comando->fetchAll(PDO :: FETCH_ASSOC);

}catch(PDOException $erro){
    $erro -> getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h3>Alterar Produtos</h3>
    <div id="container">

        <form action="../backend/_alterar_produtos.php" method="post">

            <div>
                <label for="id">ID</label>
                <input type="text" name="id" id="id" value="<?php echo $dados[0]['id']?>" readonly>
            </div>
            <div>
                <label for="titulo">Produto</label>
                <input type="text" id="produto" name="produto" value="<?php echo $dados[0]['produto']?>">
            </div>
            <div>
                <label for="valor">Valor</label>
                <input type="text" name="valor" id="valor" value="<?php echo $dados[0]['valor']?>">
            </div>

            <div>
                <label for="tipo">Tipo</label>
                <input type="text" id="tipo" name="tipo" value="<?php echo $dados[0]['tipo']?>">
            </div>
            <div>
                <label for="marca">Marca</label>
                <input type="text" id="marca" name="marca" value="<?php echo $dados[0]['marca']?>">
            </div>
            <div>
                <input type="submit" value="SALVAR">
            </div>
        </form>

    </div>


</body>

</html>