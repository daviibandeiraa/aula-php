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
        Nome: <input type="text" name="nome">
        Telefone: <input type="number" name="tel">
        E-mail: <input type="text" name="email">

        <button type="submit">Salvar</button>
    </form>

    <?php

    $nome = $_GET['nome'];
    $telefone = $_GET['tel'];
    $email = $_GET['email'];
    

    echo "Nome: $nome "; 
    echo "Telefone: $telefone ";
    echo "E-mail: $email ";




    ?>

</body>
</html>