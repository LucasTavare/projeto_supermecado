<?php

include '../backend/conexao.php';

try {
    $sql = "SELECT * FROM tb_produtos;";

    $comando = $con->prepare($sql);

    $comando->execute();

    $dados = $comando -> fetchAll(PDO::FETCH_ASSOC); 

} catch (PDOException $erro) {
    echo $erro->getMessage();
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style-listar.css">
</head>

<body>
    <div id="container">
        <h3>Listagem de produtos</h3>

        <div id="tabela">
            <table border="1">

                <tr>
                    <th>ID</th>
                    <th>Produto</th>
                    <th>Valor</th>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Alterar</th>
                    <th>Deletar</th>
                </tr>

                <?php
                    foreach($dados as $p):
                ?>
                <tr>
                    <td><?php echo $p['id'];?></td>
                    <td><?php echo $p['produto'];?></td>
                    <td><?php echo $p['valor'];?></td>
                    <td><?php echo $p['tipo'];?></td>
                    <td><?php echo $p['marca'];?></td>
                    <td>Alterar</td>
                    <td>
                        <a href="../backend/deletar_produto.php?id=<?php echo $p['id'];?>">
                            Deletar
                        </a>
                    </td>
                </tr>

                <?php
                    endforeach;
                ?>

            </table>
        </div>



    </div>



</body>

</html>