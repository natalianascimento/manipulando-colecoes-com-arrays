<?php declare(strict_types=1);

namespace Alura;

class ArrayUtils
{
    public static function remover($elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true);

        if ( is_int($posicao) ) {
            unset($array[$posicao]); //Desreferencia a posição do array - retira a posição e o valor
            
        } else {
            echo "Não foi encontrado no array.";
        }
    }
}