<?php
  include_once "./backend.php"

?>

<h1>Teste de título</h1>
<p><?= $name; ?> Veja as listagens disponíveis</p>

<h2>Confira os itens:</h2>
<ul>
  <?php foreach($produtos as $produto): ?>
    <li><?= $produto; ?></li>
  <?php endforeach; ?>
</ul>