<?php

echo "Este é um teste de string <br>";

$age = 25;

echo "Ele tem $age anos <br>"; # Somento com aspas duplas permite chamar um dado

# Verificar se um dado é string

$number = 8;
$str = "dado";
$str2 = 2;

if (is_string($number)) {
  echo "É string 1 <br>";
}

if (is_string(($str))) {
  echo "É string 2 <br>";
}

if (is_string(($str2))) {
  echo "É string 3 <br>";
}
