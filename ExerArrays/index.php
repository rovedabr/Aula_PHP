<?php

  $arr = ['batata', 'maçã', 'pera', 'feijão', 'arroz'];

  $removed = array_slice($arr, 2, 2);

  print_r($arr);
  echo "<br>";
  echo "----------------------------<br>";

  print_r($arr);
  print_r($removed);
  echo "<br>";
  echo "----------------------------<br>";

  $colors = [
    'cor1'=> 'vermelho',
    'cor2'=> 'verde',
    'cor3'=> 'amarelo'
  ];

  extract($colors);

  echo "$cor1 <br>";
  echo "$cor2 <br>";
  echo "$cor3 <br>";

  echo "----------------------------<br>";

  $marca = 'Ford';
  $motor = '2.0';
  $cor = 'Verde';
  $portas = 4;

  $carro = compact('marca', 'motor', 'cor', 'portas');
  print_r($carro) . "<br>";
  echo "<br>";
  echo "----------------------------<br>";

  $people = [ 
    'Mateus'=> 24,
    'Tiago' => 23,
    'André'=> 19,
    'João'=> 38
  ];

  ?>

  <table border="1" >
    <tr>
      <th>Nome</th>
      <th>Idade</th>
    </tr>
    <?php foreach($people as $nome => $idade):?>
      <tr>
        <td><?= $nome; ?></td>
        <td><?= $idade; ?></td>
      </tr>
      <?php endforeach; ?>
  </table>
