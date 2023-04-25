<?php
// verificar se o usuário está logado
session_start();


// conectar-se ao banco de dados
include("config.php");

// verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// atualizar os dados do usuário no banco de dados
	$id = $_POST["id"];
	$recado = $_POST['recado'];
	$data = $_POST['data'];
	
	$sql = "UPDATE tbrecado SET recado='$recado', data='$data' WHERE id=$id";
//var_dump($sql);
//exit();
	if (mysqli_query($conn, $sql)) {
		echo "Recado atualizado com sucesso.";
	} else {
		echo "Erro ao atualizar recado: " . mysqli_error($conn);
	}

	// redirecionar de volta para o perfil do usuário
	header("Location: portal.php");
	exit();
} else {
	// exibir o formulário preenchido com os dados do usuário
	$id = $_GET["id"];
	$sql = "SELECT * FROM tbrecado WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	$recado = $row['recado'];
	$data = $row['data'];
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
		<h1 id="titulo-formulario">Editar recado</h1>
        <input id = "id" type="hidden" name="id" value="<?php echo $_GET['id']  ?>">
		<input class="login" placeholder="recado:" type="text" name="recado" value="<?php echo $recado; ?>">
		<input class="login" placeholder="data" type="type" name="data" value="<?php echo $data; ?>">
		<input id="btn-editar" type="submit" name="submit" value="Editar">
	</form>
</body>
</html>