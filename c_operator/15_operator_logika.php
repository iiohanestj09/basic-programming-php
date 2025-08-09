<?php
/* NOT (!)
!true => false
!false => true


2. Or (||)
 $a      $b      Hasil
 true    true    true   
 true    false   true   
 false   true    true   
 false   false   false


3. And (&&)
 $a      $b      Hasil
 true    true    true   
 true    false   false   
 false   true    false   
 false   false   false


 4. XOR (xor)  -> Executive Or, Jika kedua nilai berbeda maka true
 $a      $b      Hasil
 true    true    false   
 true    false   true   
 false   true    true   
 false   false   false
*/

$a = 1;
$b = "";
var_dump(!$b);
var_dump(($a === $b));
var_dump(($a xor $b));