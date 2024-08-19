<?php
    //chamando a conexão
    require_once __DIR__ . "/../config/conexao.php";
    //setando o charset (para as palavras aparecerem corretamente)
    $pdo->exec("set names utf8");
    //preparando a query
    $sql = "Select * from tbAlunos";
    //executando a query
    $result = $pdo->query($sql);
    //pegando os dados da tabela anos
    $alunos = $result->fetchAll(PDO::FETCH_ASSOC);
    //retornando os dados em formato json
    echo json_encode($alunos);