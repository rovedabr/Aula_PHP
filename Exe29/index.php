<?php

$array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$i = 0;

while ($i < count($array)) {

  $atualNumber = $array[$i];

  if ($atualNumber == 30 || $atualNumber ==40) {
    $i++;
    echo "pulando <br>";
    continue;
  }
  echo "Elemento: $array[$i] <br>";

  $i++;  
}

echo "--------------------------------------<br>";

# Do While

$j = 0;

do {
  echo "testando o Do While $j <br>";
  $j++;

} while ($j < 10);