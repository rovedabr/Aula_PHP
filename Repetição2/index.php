<?php

// CONTADOR -> CONDIÇÃO -> INCREMENTO / DECREMENTO

$j = 0;
$value = "PULAR O VALOR";

for ($i = 0; $i < 10; $i++) {
  if ($i == 4) {
    echo "$value <br>";
  }
  echo "Testando o for: $i <br>";
}

echo "--------------------------------------------<br>";

$array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

for($i =0; $i <count($array); $i++) {
  if ($array[$i] % 2 == 0) {
    echo "Número: $array[$i] <br>";
  }
}

echo "--------------------------------------------<br>";

$array2 = [];

for($x = 10; $x <= 20; $x++){
  array_push($array2, $x);
}
print_r($array2);

echo "<br>";

for($v =0; $v < count($array2); $v++){

  if($array2[$v] % 2 != 0) {
    echo "Número ímpar: $array2[$v] <br>";
  }
}

echo "--------------------------------------------<br>";

$names = ["André", "Paulo", "Pedro", "Mateus"];
foreach($names as $name) {
  echo "O nome atual é: $name <br>";
}

