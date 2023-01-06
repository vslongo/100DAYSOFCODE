<?php

$skewers = ["--xo--x--ox--",
            "--xx--x--xx--",
            "--oo--o--oo--",
            "--xx--x--ox--",
            "--xx--x--ox--"];
$vegetarian_skewer_count = 0;

foreach ($skewers as $skewer) {
  if (strpos($skewer, 'x') === false) {
    $vegetarian_skewer_count++;
  }
}
echo "Número de espetos vegetarianos: " . $vegetarian_skewer_count;