<?php

class Person
{

  function talk()
  {
    echo "Olá";
  }
}

$mateus = new Person();

$mateus->name = 'Tiago'; #muda o nome da variável
echo $mateus->name;
echo "<br>";

$mateus->talk();
