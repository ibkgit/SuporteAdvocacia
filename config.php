<?php
    $dbHost = 'localhost';
    $dbUsername = 'ibk'; 
    $dbPassword = 'sql308197';
    $dbname = 'advogados';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbname)

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        "Conexão efetuada com sucesso!!!";
    }
?>