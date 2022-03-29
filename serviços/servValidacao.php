<?php

function validaNome(string $nome): bool
{
    if (empty($nome)) {
        setarMensagemErro('O nome não pode ser vazio. por favor preencha');
        return false;
    } else if (strlen($nome) < 3) {
        setarMensagemErro('O nome deve conter mais de 3 caracteres!');
        return false;
    } else if (strlen($nome) > 40) {
        setarMensagemErro('O nome é muito extenso. Tente mudar');
        return false;
    }
    return true;
}

function validaIdade(string $idade): bool
{
    if (!is_numeric($idade)) {
        setarMensagemErro('Digite a idade somente com numeros!');
        return false;
    }
    return true;
}
