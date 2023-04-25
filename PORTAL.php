<?php
session_start();
if (empty($_SESSION)) {
  echo "<script> location.href='index.php'; </script>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\portal.css">
  <title>Portal - Usuário Identificado</title>
</head>

<body>
  <header id="container-titulo">
    <h1>PORTAL DOS USUARIOS</h1>
  </header>
  <div id="container-funcoes">
    <div>
      <a href="logout.php"><button class = "botoes">Sair</button></a>
    </div>
    <div>
      <a href="perfil.php"><button class = "botoes">Editar</button></a>
    </div>
    <div>
      <a href="addrecado.php"><button class = "botoes">Adicionar Recado</button></a>
    </div>
  </div>
  <main id="container-recado">
    


    <?php 

include("config.php");



$sql = "SELECT * FROM tbrecado ORDER BY data DESC";
$res = $conn->query($sql) or die($conn->error);



function data($data){
  $f = explode("-", $data); //Gera um array com 0 = ano, 1 = mês, 2 = dia
  $g = $f[2]."/".$f[1]."/".$f[0]; //Isso é uma string. Formate-a como quiser
  return $g;
}


while ($row = mysqli_fetch_assoc($res)) {


  $id = $row['id'];
  echo"<div class='recado'>";
  echo"<h3>".data($row['data'])."<h3>";
  echo"<h2>".$row['recado']."</h2>";
  echo"<div class='btnsRecado'>";
  echo "<td><a href='editar.php?id=" . $row['id'] . "'>Editar</a> | <a href='excluir.php?id=" . $row['id'] . "'>Excluir</a></td>";
  echo"</div>";

  echo"</div>";  

}


?>

     

  </main>
</body>

</html>