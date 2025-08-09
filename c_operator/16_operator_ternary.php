<?php
// (kondisi)? nilai_jika_true : nilai_jika_false;
$a = true;
echo $a ? "True min\n" : "False min\n";

echo ($a == false )? "Hmm Benar\n" : "Hmm Salah\n";


// Nested Ternary
$nilai = 85;

$grade = ($nilai >= 90) ? "A" : 
            (($nilai >= 80) ? "B" :         // Kurung () sangat berpengaruh
            (($nilai >= 70) ? "C" : "D"));

echo $grade . "\n";