<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Em qual turno você estuda? <input type="text" name="turno" >
        <button type="submit">Concluído</button>
    </form>
    <?php
    
    $meuTurno = $_GET['turno'];

    
    if ($meuTurno == "M" )
    echo "Bom Dia";

    if ($meuTurno == "V" )
    echo "Boa Tarde";

    if ($meuTurno == "N" )
    echo "Boa Noite";

    ?>
</body>
</html>