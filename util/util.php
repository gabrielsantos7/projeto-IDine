<?php

function formatarChave($chave){
    switch ($chave) {
        case 'preco':
            $chave = 'Preço';
            break;
        case 'endereco':
            $chave = 'Endereço';
            break;
        case 'horario_atendimento':
            $chave = 'Horário de Atendimento';
            break;
        case 'especializacao':
            $chave = 'Especialização';
            break;
        case 'classificacao':
            $chave = 'Classificação';
            break;
        case 'descricao':
            $chave = 'Descrição';
            break;

        default:
            $chave = str_replace('_', ' ', $chave);
            $chave = ucfirst($chave);
            break;
    }

    return $chave;
}

function isPreco($chave, $valor){
    if($chave === 'Preço')
        return 'R$ ' . $valor;
    return $valor;
}

