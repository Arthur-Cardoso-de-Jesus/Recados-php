<!DOCTYPE html>
<html>

<head>
	<title>Cadastro de Usuários</title>]
	<link rel="stylesheet" href="css/styleFormCad.css">
</head>

<body>

	<form id="formulario" action="cad.php" method="post">
		<h1 id="titulo-formulario">Formulário de Cadastro</h1>
		<input class="inputs" type="text" name="nome" id="nome" placeholder="NOME" required><br><br>

		<input class="inputs" type="email" name="email" id="email" placeholder="E-MAIL" required><br><br>

		<input class="inputs" type="password" name="senha" id="senha" placeholder="SENHA" required><br><br>

		<input id="btn-entrar" type="submit" value="Enviar">
	</form>
</body>

</html>