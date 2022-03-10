<?php

session_start();

$categorias = array('Infantil' ,'Adolescente','Adulto');



$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
   $_SESSION['mensagem.de.erro'] = 'O nome não pode ser vazio. por favor preencha';
   header('location:index.php');
  return;
}

else if(strlen($nome) < 3){
    $_SESSION['mensagem.de.erro'] = 'O nome deve conter mais de 3 caracteres!';
   header('location:index.php');
   return;
    
}

else if(strlen($nome)> 40){
    $_SESSION['mensagem.de.erro'] = 'O nome é muito extenso. Tente mudar';
    header('location:index.php');
    return;
     
}

else if(!is_numeric($idade)){
    $_SESSION['mensagem.de.erro'] = 'Digite a idade somente com numeros!';
    header('location:index.php');
    return;
     
}



if ($idade >= 6 && $idade <= 12) {
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == "Infantil")
        {
        $_SESSION['mensagem.de.sucesso'] = "O nadador ". $nome . " compete na categoria " . $categorias[$i];
        header('location:index.php');
        return;
        }
    }

} else if ($idade >= 13 && $idade <= 17) {
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'Adolescente')
        {
        $_SESSION['mensagem.de.sucesso'] = "O nadador ". $nome . " compete na categoria " . $categorias[$i];
        header('location:index.php');
        return;
        }
    }
}else{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'Adulto')
        {
        $_SESSION['mensagem.de.sucesso'] = "O nadador ". $nome . " compete na categoria " . $categorias[$i];
        header('location:index.php');
        return;
        }
    }
}
?>