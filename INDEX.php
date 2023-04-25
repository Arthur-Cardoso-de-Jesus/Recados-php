<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\index.css"> 
    <title>Projeto Login</title>
</head>
<body>
<form id="formulario" action="login.php" method="post">
        <h1 id = "titulo-formulario">ÁREA RESTRITA</h1>
        <input type="text" name="email" class="login" placeholder="INFORME O SEU E-MAIL"><br>
        <input type="password" name="senha" class="login" placeholder="INFORME A SENHA"><br>
        <input id = "btn-entrar"type="submit" value="Entrar"><br>
        <div id="container-cadastro">
            <div>
                <h3>Novo por aqui?</h3>
            </div>
            <div>
                <a id="link" href="formcad.php"><h4>Cadastre-se<h4></a>
            </div>
        </div>
    </form>
</body>
</html>