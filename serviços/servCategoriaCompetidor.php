<?php


function defineCategoriaCompetidor(string $nome, string $idade): ?string
{
    $categorias = array('Infantil', 'Adolescente', 'Adulto');


    if (validaNome($nome) && validaIdade($idade)) {
        
        removerMensagemErro();
        
        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i < count($categorias); $i++) {
                if ($categorias[$i] == "Infantil") {
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        } else if ($idade >= 13 && $idade <= 17) {
            for ($i = 0; $i < count($categorias); $i++) {
                if ($categorias[$i] == 'Adolescente') {
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        } else {
            for ($i = 0; $i < count($categorias); $i++) {
                if ($categorias[$i] == 'Adulto') {
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        }
    } else {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}
