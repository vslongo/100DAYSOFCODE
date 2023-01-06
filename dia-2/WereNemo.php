<?php

$string = "onde esta o nosso querido peixe chamado nemo ?";
$word = "nemo";

$arr = explode(" ", $string);

$pos = array_search($word, $arr);

if ($pos !== false) {
    echo "A palavra '$word' foi encontrada na posição $pos do array.";
} else {
    echo "A palavra '$word' não foi encontrada no array.";
}
