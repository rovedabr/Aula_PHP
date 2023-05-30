<?php

$x = 10;
echo "$x global <br>";

function test() {
  $x = 5;
  echo "$x local <br>";
}

test();

# variável global - não são acessíveis dentro da função

$testOne = "asd";
echo "$testOne globlal 1 <br>";

if (5 > 2) {
  $testOne = "dsa";
  echo "$testOne local 1 <br>";
}

echo "$testOne globlal 2 antes da função  <br>";

function changeValue() {
  global $testOne; #altera o valor da variável
  $testOne = 5;

  echo "$testOne global da função <br>";
}

changeValue();
echo "$testOne global 2 fora da função <br>";


# Variável Static

function testStatic() {
  static $a = 0;

  $a++;
  echo "$a <br>";
}

testStatic();
testStatic();
testStatic();

function sum($a, $b) {
  echo $a + $b;
  echo "<br>";
}

sum(1,2);
sum(10,5);