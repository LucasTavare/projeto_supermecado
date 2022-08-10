<?php
include 'backend/conexao.php';


try {
    $sql = "SELECT * FROM tb_produtos";

    $comando = $con->prepare($sql);

    $comando->execute();

    $dados = $comando->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $erro) {
    echo $erro->getMessage();
}


?>



<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>
    <link rel="stylesheet" href="css/style-listar.css">
</head>

<body>

    <div id="container">

        <h3>Listar Produtos</h3>

        
            <div id="grid-produtos">

            <?php
            foreach ($dados as $p) :
            ?>
                <figure>

                    <img src="img/mercado.jpg" alt="">
                    <figcaption>
                        <h4><?php echo $p['produto']; ?></h4>
                        <h5><?php echo $p['valor']; ?></h5>
                        <h5><?php echo $p['tipo']; ?></h5>
                        <h5><?php echo $p['marca']; ?> </h5>
                    </figcaption>

                </figure>


            <?php
        endforeach;
            ?>

            </div>

    </div>

</body>

</html>