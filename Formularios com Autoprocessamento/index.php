<?php

  $user = [
    'nome' => 'Ju',
    'idade' => 18,
    'profissao' => 'Mestre cuca'
  ];

  if ($user) {
    $nome = $user['nome'];
    $idade = $user['idade'];
    $profissao = $user['profissao'];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="">
    <div>
      <input type="text" name="nome" id="" placeholder="Nome" value="<?= $nome ?>">
    </div>
    <div>
      <input type="text" name="idade" id="" placeholder="Idade" value="<?= $idade ?>">
    </div>
    <div>
      <input type="text" name="profissao" id="" placeholder="Profissão" value="<?= $profissao ?>">
    </div>
    <div>
      <input type="submit" value="Enviar">
    </div>
  </form>
  
</body>
</html>
