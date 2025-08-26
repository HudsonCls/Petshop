<?php
include ("./conexao.php");

// Verifica se o formulário foi enviado via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    // Criptografa a senha antes de salvar no banco
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    // Prepara a query para inserir um novo usuário
    $stmt = $conn->prepare("INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)");
    // Executa a query com os dados fornecidos
    $stmt->execute([$nome, $email, $senha]);

    // Redireciona para a página de login com parâmetro de sucesso
    header("Location: login.php?sucesso=1");

    exit();
}
?>