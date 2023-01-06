<?php

function proximo_primo($n) {
    while (true) {
      $n += 1;
      for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
          break;
        }
      }
      if ($i == $n) {
        return $n;
      }
    }
  }

  echo(proximo_primo("6"));