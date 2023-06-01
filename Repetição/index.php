<?php

//----------------------------------------------------------------

# Loop - while

$x = 0;
$z = 100;

while ( $x < 10) {
  echo $x;
  echo "<br>";
  $x += 1;
}

while ($z > 0) {
  echo $z;
  echo "<br>";
  $z -= 10;
}

//-----------------------------------------------------------------

#while - filtrando:

$array = [2, "Água", true, 25, "Pedra", false, 12.8, [], "Palavra", 5, "Teste"];

$x = count($array);
$y = 0;

while($y < $x) {

  if(is_string($array[$y])) {

    echo $array[$y]."<br>";
  }
  
  $y++;
}

//-----------------------------------------------------------------

# Loop aninhado

$i = 1;

while ($i < 10) {
  echo "Loop externo $i <br>";

  $j = 1;

  While ($j <= 5) {
    echo "Loop interno $j <br>";
    $j++;
  }
  $i++;
}

//------------------------------------------------------------------

