<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio8</title>
</head>
<body>
    <form action='' method="get" >
        Nota 1: <input type="text" name="num1"><br>
        Nota 2: <input type="text" name="num2"><br>
        Nota 3: <input type="text" name="num3"><br>
        Nota 4: <input type="text" name="num4"><br>
        <button type="submit">Calcular</button>
</form>

<?php
$nota1 = $_GET['num1'];
$nota2 = $_GET['num2'];
$nota3 = $_GET['num3'];
$nota4 = $_GET['num4'];
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
echo "Média : $media - "; 

if ($media < 5)
echo "Reprovado" ;

else 
echo "Aprovado";

?>

</body>
</html>

