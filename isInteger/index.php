<?php

#Inteiros 
$number = 6;

if (is_int($number)) {
  echo "É inteiro <br>";
}

# Floats
$number2 = 6.5;

if (is_float($number2)) {
  echo "É flutuante <br>";
}

# Condicional

$numberA = 5;
$numberB = 5.5;

if (is_float($numberA)) {
  echo "Número flutiante 1 <br>";
}
 
if (is_float($numberB)) {
  echo "Número flutiante 2 <br>";
}

if (is_float(2.25)) {
  echo "Número flutiante 3 <br>";
}