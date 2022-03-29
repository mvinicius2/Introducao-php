<?php
include "serviços/servMensagemSessao.php"


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

    <form action="script.php" method="post">
        <?php
        $mensagemSucesso = obterMensagemSucesso();
        if (!empty($mensagemSucesso)) {
            echo $mensagemSucesso;
        }



        $mensagemErro = obterMensagemErro();
        if (!empty($mensagemErro)) {
            echo $mensagemErro;
        }


        ?>
        <p>Your name: <input type="text" name="nome" /></p>
        <p>Your age: <input type="text" name="idade" /></p>
        <p><input type="submit" value="Enviar dados do competidor" /></p>
    </form>

</body>

</html>