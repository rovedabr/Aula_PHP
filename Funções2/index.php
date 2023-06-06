<?php

  function sum($a, $b) {
      echo $a + $b ."<br>";
  }
  sum(2,3);

  echo "---------------------------------<br>";

  echo strtoupper("teste");
  echo "<br>";

  echo "---------------------------------<br>";

  $array = ["maça", "banana", "pera", "uva"];

  echo implode(" - ",$array); 

  echo "---------------------------------<br>";

  function multi() {
    $a = 2;
    $b = 3;
    $c = 4;
    echo $a * $b * $c . "<br>";
  }
  multi();
  echo "---------------------------------<br>";

  function petName($typePet, $name) {
    echo "O nome do $typePet é $name <br>";
  }

  petName("cachorro", "Phanton");
  echo "---------------------------------<br>";

  function myName($name, $age) {
    echo "Meu nome é $name e tenho $age anos <br>";
  }
  myName("Ivan", 47);
  echo "---------------------------------<br>";

  function parOuImpar($num) {
    
    if ($num % 2 === 0) {
      echo "O número é par <br>";
    } else {
      echo "O número é impar <br>";
    }
  }
  parOuImpar(3);
  parOuImpar(4);





