<?php

use function PHPSTORM_META\type;

$a = 10;
$b = 5;
$c = 3;
$d = 5;

if ($a >= $b && $b === $d) {
  echo "Todos os valores são verdadeiros <br>";
}

if ($a < $b || $b === $d) {
  echo "Um dos valores é falso <br>";
}

if (!(2 > 5)) {
  echo "Retorna valor verdadeiro pois inverte a ordem <br>";
}

# Operadores de conversão

$e = (int) "15";
echo "$e <br>";
echo gettype($e);
echo "<br>";

$g = "10";
echo gettype($g);
echo "<br>";

$f = (int) $g;
echo gettype($f);
echo "<br>";

# Operadores de atribuição

$x = 2;
$y = 5;

$x -= 1;
echo $x ."<br>";
$y += 5;
echo $y ."<br>";

$x *= 4;
echo $x ."<br>";

$y /= 5;
echo $y ."<br>";
