<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleAddRecado.css">
    <title>Document</title>
</head>


<body>
    <form id="formulario" action="recado.php" method="post">
        <h1 id = "titulo-formulario">Escreva seu recado aqui!</h1>
        <textarea id ="area"name="recado" cols="30" rows="10" class="recado"
            placeholder="Adicione aqui seu recado."></textarea><br>

        <input id = "data" type="date" name="data" class="recado" placeholder="INFORME A SENHA"><br>
        <input id ="btn-entrar" type="submit" value="Entrar"><br>

    </form>


</body>

</html>