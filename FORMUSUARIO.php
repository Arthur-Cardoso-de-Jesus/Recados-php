<!DOCTYPE html>
<html>
<head>
	<title>Lista de Usuários</title>
</head>
<body>
	<h1>Lista de Usuários</h1>
	<table>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Ação</th>
		</tr>
		<?php
        include("config.php");
         $sql = "select * from tbusuario";
         $result = $conn->query($sql) or die($conn->error);
		// aqui você deve incluir um script PHP que consulta o banco de dados e retorna a lista de usuários em um loop
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['nome'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td><a href='editar_usuario.php?id=" . $row['id'] . "'>Editar</a> | <a href='excluir_usuario.php?id=" . $row['id'] . "'>Excluir</a></td>";
			echo "</tr>";
		}
		?>
	</table>
	<a href="adicionar_usuario.php">Adicionar Usuário</a>
</body>
</html>