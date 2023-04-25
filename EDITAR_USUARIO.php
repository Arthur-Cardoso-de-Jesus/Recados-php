
<?php
// verificar se o usuário está logado
session_start();

if (!isset($_SESSION["id"])) {
	header("Location: login.php");
	exit();
}

// conectar-se ao banco de dados
include("config.php");

// verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// atualizar os dados do usuário no banco de dados
	$id = $_SESSION["id"];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = "UPDATE tbusuario SET nome='$nome', email='$email', senha='$senha' WHERE id=$id";
//var_dump($sql);
//exit();
	if (mysqli_query($conn, $sql)) {
		echo "Usuário atualizado com sucesso.";
	} else {
		echo "Erro ao atualizar usuário: " . mysqli_error($conn);
	}

	// atualizar as informações na sessão
	$_SESSION["nome"] = $nome;
	$_SESSION["email"] = $email;
	$_SESSION["senha"] = $senha;

	// redirecionar de volta para o perfil do usuário
	header("Location: perfil.php");
	exit();
} else {
	// exibir o formulário preenchido com os dados do usuário
	$id = $_SESSION["id"];
	$sql = "SELECT * FROM tbusuario WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$nome = $row['nome'];
	$email = $row['email'];
	$senha = $row['senha'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css\styleEditarUsuario.css">
	<title>Document</title>
</head>
<body>
<form id="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<h1 id="titulo-formulario">Editar cadastro</h1>
		<input class="login" placeholder="NOME:" type="text" name="nome" value="<?php echo $nome; ?>">
		<input class="login" placeholder="E-MAIL:" type="email" name="email" value="<?php echo $email; ?>">
		<input class="login" placeholder="SENHA:" type="password" name="senha" value="<?php echo $senha; ?>">
		<input id="btn-editar" type="submit" name="submit" value="Editar">
	</form>
</body>
</html>