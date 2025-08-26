<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
	// Redireciona para o login se não estiver logado
	header("Location: /petshop/PHP/login.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login Concluído!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			background-size: cover;
			font-family: Arial, sans-serif;
			margin: 0;
		}
		.container {
			background: rgba(255,255,255,0.92);
			max-width: 420px;
			margin: 80px auto;
			padding: 32px 28px 24px 28px;
			border: 2px solid #3aafa9;
			border-radius: 12px;
			box-shadow: 0 8px 32px rgba(0,0,0,0.25);
			text-align: center;
		}
		header h1 {
			margin-top: 0;
			color: #3aafa9;
			font-size: 2em;

		}
		header p {
			color: #555;
			margin-bottom: 24px;
			font-weight: bold;
		}

		a {
			color: #3aafa9;
			text-decoration: none;
			font-weight: bold;
			transition: color 0.2s;
		}
		a:hover {
			color:#2b7a78;
		}
		button {
			margin-top: 18px;
			padding: 10px 28px;
			background: #3aafa9;
			color: #fff;
			border: none;
			border-radius: 8px;
			font-size: 1em;
			cursor: pointer;
			transition: background 0.2s;
		}
		button:hover {
			background:#2b7a78;
		}
	</style>
</head>
<body background="../IMAGENS/Nova pasta/background/2148949590.jpg">
	<div class="container">
		<header>
			<h1>Bem-vindo(a), <?php echo htmlspecialchars($_SESSION['user_nome']); ?>!</h1>
			<p>Você está logado com sucesso.</p>
		</header>

		<section>
			<p><a href="logout.php">Sair</a></p>
			<button onclick="window.location.href='/petshop/Trabalho Final - Petshop/home.html'">Ir para Home</button>
		</section>
	</div>
</body>
</html>
