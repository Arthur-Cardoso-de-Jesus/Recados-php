<?php
include("config.php");

// Obtém os dados do formulário
$recado = mysqli_real_escape_string($conn, $_POST['recado']);
$data = mysqli_real_escape_string($conn, $_POST['data']);


// Insere os dados no MySQL
$query = "INSERT INTO tbrecado (recado, data) VALUES ('$recado', '$data')";
$resultado = mysqli_query($conn, $query);

// Verifica se houve erro na inserção
if (!$resultado) {
	die("Erro ao inserir os dados no MySQL: " . mysqli_error($conexao));
}

// Fecha a conexão com o MySQL
mysqli_close($conn);

// Redireciona para a página de sucesso
header("Location: portal.php");

?>