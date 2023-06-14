<?php
  $arr = [
    [1, 2, 3],
    [2, 3, 4]
  ];

  print_r(($arr));
  echo "-----------------------------<br>";

  echo $arr[0][1] . "<br>";

  echo "-----------------------------<br>";

  $arr2 = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
  ];

  echo $arr2[1][1] . "<br>";
  echo "-----------------------------<br>";

  $car = [
    'marca'=> 'Ford',
    'motor'=> '2.0',
    'teto_solar' => true,
    'cambio' => 'manual',
    'portas' => 4
  ];

  $keys = array_keys($car);

  print_r($keys);
  echo "<br>";