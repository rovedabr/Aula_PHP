<?php

  class Person {
    
    function speak() {
      echo "Olá, isso é um teste de objeto! <br>";
    }

    function sum($a, $b) {
      echo $a + $b . "<br>";
    }
  }

  $Juscelino = new Person;
  $André = new Person;

  $Juscelino->speak();
  $Juscelino->sum(2,5);
  $André->sum(5,5);
