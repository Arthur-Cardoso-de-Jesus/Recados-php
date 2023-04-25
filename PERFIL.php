<?php
// verificar se o usuário está logado
session_start();

if (!isset($_SESSION["id"])) {
	header("Location: login.php");
	exit();
}

// exibir as informações do usuário logado
$id = $_SESSION["id"];
$nome = $_SESSION["nome"];
$email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css\stylePerfil.css">
	<title>Document</title>
</head>
<body>
<div id="container">
		<h1 id="titulo">Seu perfil</h1>
		<div id="container-dados">
			<p>ID:
				<?php echo $id; ?>
			</p>
			<p>Nome:
				<?php echo $nome; ?>
			</p>
			<p>Email:
				<?php echo $email; ?>
			</p>
		</div>
		<div id="container-botoes">
			<div>
				<a href="editar_usuario.php"><button class = "botoes">Editar cadastro</button></a>
			</div>
			<div>
				<p><a href="excluir_usuario.php"><button class = "botoes">Excluir cadastro</button></a></p>
			</div>
		</div>
	</div>
</body>
</html>