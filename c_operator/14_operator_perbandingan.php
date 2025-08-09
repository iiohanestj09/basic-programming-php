<?php
/*
? == Equality
? != Inequality
? === Strict Equality
? !== Strict Inequality

? < Kurang dari
? <= Kurang dari sama dengan
? > Lebih dari
? >= Lebih dari sama dengan
? <=> SPACESHIP OPERATOR: 
  -1 Jika $a < $b
   0 Jika $a == $b
   1 Jika $a > $b
*/

$a = 3;
$b = 4;
$c = 0;
$d = "0";
echo ($a <=> $b). "\n";
echo ($b <=> $a). "\n";
echo ($c <=> $d). "\n";