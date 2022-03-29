<?php


include "serviços/servMensagemSessao.php";
include "serviços/servValidacao.php";
include "serviços/servCategoriaCompetidor.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];


defineCategoriaCompetidor($nome, $idade);
header('location:intro.php');
