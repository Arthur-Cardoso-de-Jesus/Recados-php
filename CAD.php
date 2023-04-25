<?php
include("config.php");

// Obtém os dados do formulário
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);
$senha_md5 = md5($senha); // Criptografa a senha usando MD5

// Insere os dados no MySQL
$query = "INSERT INTO tbusuario (nome, email, senha) VALUES ('$nome', '$email', '$senha_md5')";
$resultado = mysqli_query($conn, $query);

// Verifica se houve erro na inserção
if (!$resultado) {
	die("Erro ao inserir os dados no MySQL: " . mysqli_error($conexao));
}

// Fecha a conexão com o MySQL
mysqli_close($conn);

// Redireciona para a página de sucesso
header("Location: index.php");

?>