<?php

$x = 10;
echo "$x global <br>";

function test() {
  $x = 5;
  echo "$x local <br>";
}

test();