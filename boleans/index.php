<?php

#somente o valor true é apresentado em tela

$bolean1 = true;
$bolean2 = 0;

if (is_bool($bolean1)) {
  echo "é boleano";
}

if (is_bool($bolean2)) {
  echo "é boleano";
}