<?php

try{


define('SERVIDOR','localhost');
define('USUARIO','root');
define('SENHA','');
define('BASEDADOS','db_supermercado');

$con = new PDO("mysql:host=".SERVIDOR.";dbname=".BASEDADOS, USUARIO, SENHA);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "Erro ao conectar: ".$e->getMessage();
}

?>