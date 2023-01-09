<?php
// Array de mapeamento de dígitos para letras
$mapping = array(
  "2" => array("a", "b", "c"),
  "3" => array("d", "e", "f"),
  "4" => array("g", "h", "i"),
  "5" => array("j", "k", "l"),
  "6" => array("m", "n", "o"),
  "7" => array("p", "q", "r", "s"),
  "8" => array("t", "u", "v"),
  "9" => array("w", "x", "y", "z")
);

function getLetterCombinations($digits) {
  // Matriz para armazenar todas as combinações
  $combinations = array();
  
  // Função recursiva para percorrer todas as combinações
  function recursiveCombinations(&$combinations, &$mapping, $combination, $nextDigits) {
    // Se não houver mais dígitos para processar, adicione a combinação atual à matriz de combinações
    if (strlen($nextDigits) == 0) {
      array_push($combinations, $combination);
    }
    // Senão, tente todas as combinações com o próximo dígito
    else {
      // Obtenha as opções de letras para o próximo dígito
      $digitsOptions = $mapping[$nextDigits[0]];
      
      // Percorra todas as opções de letras
      for ($i = 0; $i < count($digitsOptions); $i++) {
        // Adicione a letra atual à combinação e chame a função recursivamente com o resto dos dígitos
        recursiveCombinations($combinations, $mapping, $combination . $digitsOptions[$i], substr($nextDigits, 1));
      }
    }
  }
  
  // Inicie a função recursiva com uma combinação vazia e todos os dígitos
  recursiveCombinations($combinations, $mapping, "", $digits);
  
  // Retorne a matriz de combinações
  return $combinations;
}

// Exemplo de uso
$digits = "23";
$combinations = getLetterCombinations($digits);
print_r($combinations);