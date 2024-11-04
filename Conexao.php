<?php

$servidor = "localhost";
$usuario = "usrcinema";
$senha = "cinem@";

try {
    $con = new PDO("mysql:host=$servidor;dbrname=cinema", $usuario,$senha, 
        array(
         PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
         PDO::ATTR_PERSISTENT => false,
         PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMEs utf8 '
        ));
    echo 'Conexão com BD - OK';
} 
catch (PDOException $ex) 
{
    echo 'Erro na conexão com o BD'.$ex->getMessage();
}

