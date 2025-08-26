<?php include ("./conexao.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* ===== Base Styles ===== */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
             margin: 0;
            padding: 0;
        }

        /* ===== Container Styles ===== */
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 0px 16px;
        }

        /* ===== Header Styles ===== */
        header {
            background: #3aafa9;
            color: #fff;
            text-align: center;
            font-weight: bold;
            padding: 24px 0 16px 0;                border-radius: 12px;
            border: 2px solid #fff;
            max-width: 420px;
            margin: 32px auto 0 auto;
            box-shadow: 0 2px 8px rgba(58,175,169,0.08);
        }
        /* ===== Section (Form Container) ===== */
        section {
            background: #fff;
            max-width: 370px;
            margin: 40px auto 0 auto;
            padding: 36px 28px 28px 28px;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(58,175,169,0.08);
        }
        /* ===== Form Styles ===== */
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        label {
            font-weight: 500;
            color:rgb(31, 31, 31);
            margin-bottom: 2px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            padding: 12px;
            border: 1px solid #b2dfdb;
            border-radius: 6px;
            font-size: 1em;
            background: #f8fdfa;
            transition: border 0.2s;
        }

        button {
            background: #3aafa9;
            color: #fff;
            border: none;
            padding: 13px;
            border-radius: 6px;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.3s;
            font-weight: bold;
            margin-top: 10px;
            letter-spacing: 0.5px;
        }
        button:hover {
            background:  #2b7a78;
        }

        /* ===== Text and Link Styles ===== */
        p {
            text-align: center;
            margin-top: 16px;
        }
        p.pergunta {
            text-align: left;
            margin-top: 18px;
            font-size: 0.98em;
        }
        a {
            color:#3aafa9;
            text-decoration: none;
            transition: color 0.2s;
        }
        a:hover {
            color:  #2b7a78;
            text-decoration: underline;
        }

        /* ===== Cadastro Link Styles ===== */
        #log {
            text-decoration: underline;
            color: #3aafa9;
            font-weight: bold;
            margin-left: 4px;
        }
        #voltar{
            text-decoration:none;
            color: #3aafa9;
            font-weight: bold;
            margin-top: 12px;
        }
        p.voltar {
            text-align: left;
            margin-top: 8px;
        }

    </style>
</head>
<body background="../IMAGENS/Nova pasta/background/2148949590.jpg">
    <div class="container">
        <header>
            <h1>Cadastro de Usuário</h1>
            <p>Preencha os campos abaixo para criar uma conta</p>
        </header>   
        <section>
        <form method="POST" action="../PHP/p_cadastro.php">
            <label for="nome">Seu nome:</label>
            <input type="text" name="nome" placeholder="Nome" required>
            <label for="email">Seu email:</label>
            <input type="email" name="email" placeholder="E-mail" required>
            <label for="senha">Sua senha:</label>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Cadastrar</button>
        </form>
        <p class="pergunta">Já tem conta? <a href="login.php" id="log">Faça login</a></p>
        <p class="voltar"><a href="javascript:history.go(-1)" id="voltar">Voltar para a página anterior</a></p>
        </section>
    </div>
</body>
</html>