<?php
// >, <, =<, >=, ==, ===, !=, !==
$a = 5;
$b = 4;
$check = $a > $b;
var_dump($check);
echo '<br/>';
$a = 4;
$b = 1;
$check = $a < $b;
var_dump($check);
echo '<br/>';
$a = 5 ;
$b = "5";
$check = $a == $b;
var_dump($check);
echo '<br/>';
$a = 3;
$b = "3";
$check = $a === $b;
var_dump($check);
echo '<br/>';
$a = 10;
$b = "4";
$check = $a != $b;
var_dump($check);
echo '<br/>';
$a = 9;
$b = 8;
$check = $a !== $b;
var_dump($check);
echo '<br/>';
// and &&, or ||, denine !
$a = 10;
$b = 1;
$c = 2;
$check = $a > $b && ($b > $c && $a > $c);
var_dump($check);
echo '<br/>';
$a = 1;
$b = 0;
$check = $a >= 1 || $b >= 1;
var_dump($check);
echo '<br/>';
$a = true;
$check = !$a;
var_dump($check);
echo '<br/>';
// 有線順位：not -> and -> or