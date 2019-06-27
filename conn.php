<?php

$arq        = fopen('acesso.json','r');
$linha      = fgets($arq);

$data       = explode(",",$linha);

$hostname   =   $data[0] ; 	
$dbname     =   $data[1]; 	
$username   =   $data[2]; 	
$pw         =   $data[3]; 		

try{
    $pdo = new PDO ("sqlsrv:server = $hostname ; Database = $dbname", $username, $pw);
}
catch (PDOException $e) {
    echo "Erro de Conexão " . $e->getMessage() . "\n";
    exit;
}