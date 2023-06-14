<?php

  $a = [ 1, 2 ,3];
  #para imprimir um array usa-se a função print_r
  print_r($a);
  echo "<br>";
  echo $a[2];
  echo "<br>";


  # Array associativo

  $arrAss = ["nome"=> 'Mateus', "idade" => 29];
  print_r($arrAss["nome"]);

  echo "<br>";

  $car = [
    'marca' => "fiat",
    'ano'=> 2007,
    'cor' => 'verde'
  ];

  print_r($car);
  echo "<br>";
  print_r($car['ano']);
  echo "<br>";
  $marca = $car['marca'];
  $cor = $car["cor"];

  echo "O carro é da marca $marca com cor $cor";
  echo "<br>";

  $person = [
    'name' => "Pedro",
    'age' => "10",
    'isStudent' => true
  ];

  if($person['age'] >= 18 ) {
    echo "É maior de idade <br>";
  } 
  else {
    echo "Não é maior de idade <br>";
  }

echo "------------------------------<br>";

  $arr = [];
  print_r($arr);
  echo "<br>";

  $arr[0] = 10;
  print_r($arr);
  echo "<br>";

  $arr[1] = 15;
  print_r($arr);  
  echo "<br>";

  $arr[1] += 25;
  print_r($arr);  
  echo "<br>";

  echo "------------------------------<br>";

  $arrayRange = range(1,10);
  print_r($arrayRange);
  echo "<br>";

  $arrayRange2 = range(1,1000,100);
  print_r($arrayRange2);
  echo "<br>";

  echo "------------------------------<br>";

  $arr3 = range(10,45);

  for ( $i = 0; $i < count($arr3); $i++) {
    
    $sum = $arr3[$i] + 6;
    echo "$sum <br>";
  }

  echo "------------------------------<br>";

  $arr4 = [1,2,3];
  echo count($arr4)."<br>";




