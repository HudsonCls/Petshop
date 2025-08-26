<?php

// Exibe erros para facilitar o debug durante o desenvolvimento
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Inclui o arquivo de conexão com o banco de dados
include ("./conexao.php");

// Verifica se o formulário foi enviado via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados enviados pelo formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Prepara e executa a consulta para buscar o usuário pelo email
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    // Verifica se o usuário existe e se a senha está correta
    if ($user && password_verify($senha, $user['senha'])) {
        // Inicia a sessão e armazena informações do usuário
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_nome'] = $user['nome'];

        // Redireciona para a Página de sucesso no login
        header("Location: dashboard.php");
        exit();

    } else {
        // Redireciona de volta para a página de login com erro
        header("Location: login.php?erro=1");
        exit();
    }
}
?>