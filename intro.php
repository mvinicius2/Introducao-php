<?php

$categorias = array('Infantil' ,'Adolescente','Adulto');



$nome = 'Marcos';
$idade = 20;


if ($idade >= 6 && $idade <= 12) {
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == "Infantil")
        echo "O nadador ". $nome . " compete na categoria " . $categorias[$i];
    }

} else if ($idade >= 13 && $idade <= 17) {
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'Adolescente')
        echo "O nadador ". $nome . " compete na categoria " . $categorias[$i];
    }
}else{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'Adulto')
        echo "O nadador ". $nome . " compete na categoria " . $categorias[$i];
    }
}
?>
