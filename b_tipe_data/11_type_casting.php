<?php
// Type CAsting adalah proses mengubah tipe data secara paksa (eksplisit) ke tipe tertentu. Casting ini dilakukan dengan sintaks khusus dan bukan otomatis dari PHP seperti type juggling

// (int)
$val1 = 9;              // 9 -> 9
$val2 = 3.4;            // 3.4 -> 3
$val3 = "7.7";          // "7.7" -> 7
$val4 = true;           // true -> 1
var_dump((int) $val1, (int) $val2, (int) $val3, (int) $val4);
echo "\n";

// (float)
$val1 = 9;              // 9 -> 9 float
$val2 = 3.4;            // 3.4 -> 3.4
$val3 = "7.7";          // "7.7" -> 7.7
$val4 = true;           // true -> 1 float
var_dump((float) $val1, (float) $val2, (float) $val3, (float) $val4);
echo "\n";

// (string)
$val1 = 9;              // 9 -> "9"
$val2 = 3.4;            // 3.4 -> "3.4"
$val3 = "7.7";          // "7.7" -> "7.7"
$val4 = true;           // true -> "1"
var_dump((string) $val1, (string) $val2, (string) $val3, (string) $val4);
echo "\n";

// (bool)
$val1 = 0;              // 0 -> false
$val2 = 0.4;            // 0.4 -> true
$val3 = "0";            // "0" -> false
$val4 = "-3.7";         // "-3.7" -> true
$val5 = "false";        // "false" -> true
var_dump((bool) $val1, (bool) $val2, (bool) $val3, (bool) $val4, (bool) $val5);
echo "\n";