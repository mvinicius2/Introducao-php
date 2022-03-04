<?php

$categorias = array('Infantil' ,'Adolescente','Adulto');



$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo 'O nome não pode ser vazio!';
    return;

}

if(strlen($nome) < 3){
    echo 'O nome deve conter mais de 3 caracteres!';
    return;
    
}

if(strlen($nome)> 40){
    echo 'O nome é muito extenso!';
    return;
}

if(!is_numeric($idade)){
    echo 'Digite a idade somente com numeros!';
    return;
}



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