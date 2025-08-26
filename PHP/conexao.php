<?php

    // Definindo as variáveis de conexão com o banco de dados
    $host = "localhost";
    $user = "root";
    $pass = "123456";
    $dbnome = "login";

    try{
        // Criando uma nova conexão PDO com o banco de dados MySQL
        $conn = new PDO("mysql:host=$host;dbname=$dbnome", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*
        echo "Conexão realizada com sucesso!\n";
        echo "Host: " . $host . "\n";
        echo "Usuário: " . $user . "\n";
        echo "Senha: " . $pass . "\n";
        */

 } catch(PDOException $e) {
    echo "Erro na conexão". $e->getMessage();
    exit();
 }
        
?>