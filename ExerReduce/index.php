<?php

  $arr = [1, 2, 3, 5, 9, 10, 25, 5, 78, 4, 100];

  function sum($a, $b) {
    return $a + $b;
  }

  $result = array_reduce($arr, 'sum');
  echo "$result <br>";
  echo "----------------------------------------<br>";

  $fruits  = ['maçã', 'banana', 'figo', 'mamão', 'pera'];

  if (in_array('maçã',$fruits)) {
    echo " Há o item Maçã <br>";
  } else {
    echo " Não há maçã do array <br>";
  }
  echo "----------------------------------------<br>";

  $arr2 = [1, 2, 3, 5, 9, 10, 25, 5, 78, 4, 100];
  sort($arr2);
  print_r($arr2);
  echo "<br>";
  echo "----------------------------------------<br>";
  rsort($arr2);
  print_r($arr2);
  echo "<br>";
  echo "----------------------------------------<br>";

  $ranking = [
    'Mateus'=> 200,
    'João'=> 54,
    'Pedro'=> 35,
    'Maria'=> 400,
    'Joana'=> 350,
    'Henrique'=> 12
  ];

  arsort($ranking)

  ?>

  <h1>Ranking</h1>
  <ol>
    <?php foreach($ranking as $pessoa => $pontuação): ?>
      <li><?= $pessoa ?> => <?= $pontuação ?> pontos </li>
    <?php endforeach;?>
  </ol>

