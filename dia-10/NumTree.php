<?php

function numTrees($n) {
    $count = array();
    $count[0] = 1;
    $count[1] = 1;
    for ($i = 2; $i <= $n; $i++) {
        $count[$i] = 0;
        for ($j = 0; $j < $i; $j++) {
            $count[$i] += $count[$j] * $count[$i - $j - 1];
        }
    }
    return $count[$n];
}


print_r(numTrees(3));