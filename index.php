<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/script.js"> </script>
    <title> Tabuada </title>
</head>
<body>
<h1> Atividade - Tabuada </h1>
<p> Mostrar Tabuada Em Ordem Crescente E Decrescente </p>
<form method="GET" action="#" onsubmit="return validanum1(this)">
<p> Digite Um Número: <input type="text" name="num1"> </p>
<p> <input type="submit" value="Enviar"> </p>
</form>
<?php
$num1 = $_GET["num1"];
if (isset($num1))
{
    for($i = 0; $i <= 10; $i++ )
    {
        $resultado = $num1 * $i;
        echo "$num1 * $i = $resultado<br>";
    }
}
?>
<hr>
<?php
if (isset($num1))
{
    for($i = 10; $i >= 0; $i-- )
    {
        $resultado = $num1 * $i;
        echo "$num1 * $i = $resultado<br>";
    }
}
?>
</body>
</html>