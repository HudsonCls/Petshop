<?php include ("./conexao.php"); ?>
<!-- localhost/petshop/login.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Login - Petshop Apollo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* ===== Corpo ===== */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* ===== Cabeçalho ===== */
        header {
            background: #3aafa9;
            color: #fff;
            text-align: center;
            font-weight: bold;
            padding: 24px 0 16px 0;
            border-radius: 12px;
            border: 2px solid #fff;
            max-width: 420px;
            margin: 32px auto 0 auto;
            box-shadow: 0 2px 8px rgba(58,175,169,0.08);
        }

        /* ===== Seção  ===== */
        section {
            background: #fff;
            max-width: 370px;
            margin: 40px auto 0 auto;
            padding: 36px 28px 28px 28px;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(58,175,169,0.08);
        }

        /* ===== Formulários ===== */
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

        input[type="email"],
        input[type="password"] {
            padding: 12px;
            border: 1px solid #b2dfdb;
            border-radius: 6px;
            font-size: 1em;
            background: #f8fdfa;
            transition: border 0.2s;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border: 1.5px solid #3aafa9;
            outline: none;
        }

        button[type="submit"] {
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

        button[type="submit"]:hover {
            background: #2b7a78;
        }

        /* ===== Textos e Links ===== */
        p {
            text-align: center;
        }

        p.pergunta {
            text-align: left;
            margin-top: 18px;
            font-size: 0.98em;
        }

        a {
            color: #3aafa9;
            text-decoration: none;
            transition: color 0.2s;
        }

        a:hover {
            color: #2b7a78;
            text-decoration: underline;
        }

        /* ===== Mensagens de erro e sucesso ===== */
        .msg-erro {
            color: #e84545;
            text-align: center;
            margin-bottom: 12px;
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        .msg-sucesso {
            color: #43a047;
            text-align: center;
            margin-bottom: 12px;
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        /* ===== Link para cadastro ===== */
        #cad {
            text-decoration: underline;
            color: #3aafa9;
            font-weight: bold;
            margin-left: 4px;
        }
        /* ===== Link para voltar a página anterior ===== */
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
<body background="../imagens/Nova pasta/background/2148949590.jpg">
    
    <header>
        <h1>PetShop Apollo - Login</h1>
        <p>Faça login para acessar sua conta.</p>
    </header>

    <section>
        <?php if (isset($_GET['erro'])) echo "<p class='msg-erro'>E-mail ou senha inválidos!</p>"; ?>
        <?php if (isset($_GET['sucesso'])) echo "<p class='msg-sucesso'>Cadastro realizado! Faça login.</p>"; ?>

        <form method="POST" action="p_login.php">
            <label for="email">Seu email:</label>
            <input type="email" name="email" placeholder="E-mail" required><br>
            <label for="email">Sua senha:</label>
            <input type="password" name="senha" placeholder="Senha" required><br>
            <button type="submit">Entrar</button>
        </form>
        <p class="pergunta">Não tem conta?<a href="cadastro.php" id="cad">Cadastre-se</a></p>
        <p class="voltar"><a href="javascript:history.go(-1)" id="voltar">Voltar para a página anterior</a></p>
    </section>

</body>
</html>