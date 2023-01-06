<?php

function countSocks($string){

    if(empty($string)){
        return 0;
        die;
    }

    $letras = str_split(strtoupper($string));
    $meias = 0;
    foreach ($letras as $letra){

        if(substr_count($string, $letra) >= 2){
            $meias++;
        }
    }
    return floor(($meias / 2));
}

countSocks("ABABC");