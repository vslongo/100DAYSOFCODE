<?php

function calcularAguaRetida($mapa) {
  $aguaRetida = 0; // inicializa a quantidade de água retida com zero
  
  // para cada elemento no mapa
  for ($i = 0; $i < count($mapa); $i++) {
    // encontra o número máximo de elementos a esquerda e a direita deste elemento que são maiores que ele
    $maxEsquerda = 0;
    for ($j = $i; $j >= 0; $j--) {
      $maxEsquerda = max($maxEsquerda, $mapa[$j]);
    }
    $maxDireita = 0;
    for ($j = $i; $j < count($mapa); $j++) {
      $maxDireita = max($maxDireita, $mapa[$j]);
    }
    
    // o número máximo de elementos que este elemento pode reter é o menor dos dois números encontrados menos o próprio elemento
    $elementosRetidos = min($maxEsquerda, $maxDireita) - $mapa[$i];
    
    // se o resultado for negativo, este elemento pode reter zero elementos
    if ($elementosRetidos < 0) {
      $elementosRetidos = 0;
    }
    
    // adiciona o número calculado de elementos retidos ao total
    $aguaRetida += $elementosRetidos;
  }
  
  // retorna a quantidade total de elementos retidos
  return $aguaRetida;
}

print_r(calcularAguaRetida([0,1,0,2,1,0,1,3,2,1,2,1]));