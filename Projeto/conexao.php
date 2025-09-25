<?php
    //faz conexão com o banco
    $dominio = "mysql:host=localhost;dbname=projetophp"; //qual banco; onde esta hospedado; nome do banco
    $usuario = "root";
    $senha = "";

    //
    try { //sequencia de ações que queremos que aconteça
        $pdo = new PDO($dominio, $usuario, $senha);
    } catch(Exception $e) { //captura e trata o erro
        die("Erro ao conectar ao banco!".$e->getMessage()); //mata a aplicação
    }