<?php

function somaElementos() {
  $elementos = [1, 3, 4, 6, 7];
  return array_sum($elementos);
} 

echo somaElementos();