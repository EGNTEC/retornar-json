<?php

require_once 'conn.php';

$sql   = "SELECT * From tIAGSfunc Where codper =:codper";
$query = $pdo->prepare($sql);
$query->bindValue(':codper',5);
$query->execute();
 
while($dados = $query->fetch(PDO::FETCH_ASSOC)){
    $array = array(
        'Projeto'           =>$dados['nomprg'],
        'Operacao'          =>$dados['tipreg'],
        'Id'                =>$dados['numcad'],
        'IdLocal'           =>$dados['numloc'],
        'IdLocaisAdicionais'=>$dados['locadi'],
        'Nome'              =>$dados['nomfun'],
        'CPF'               =>$dados['numcpf'],
        'Email'             =>$dados['emaemp'],
        'Cargo'             =>$dados['nomcar'],
        'IdPerfil'          =>$dados['codper'],
        'Desativado'        =>$dados['sitblo']
    );    
    $info[] = $array;    
}

echo json_encode($info);

