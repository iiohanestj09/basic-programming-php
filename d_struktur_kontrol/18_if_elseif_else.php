<?php

// if
$a = 85;

if ($a >= 70) echo "Kerja Bagus\n";

// if-else
if ($a >= 70) echo "Lulus\n";
else echo "Tidak Lulus\n";

// if-elseif-else
if ($a >= 90) echo "A\n";
elseif ($a >= 80) echo "B\n";
elseif ($a >= 70) echo "C\n";
else echo "D\n";

// Nested if
$b = 65;

if ($a >= 90) {
    if ($b >= 90) echo "A\n";
    elseif ($b >= 80) echo "A-\n";
    elseif ($b >= 70) echo "A-\n";
    else echo "B\n";
} elseif ($a >= 80) {
    if ($b >= 90) echo "A-\n";
    elseif ($b >= 80) echo "B+\n";
    elseif ($b >= 70) echo "B\n";
    else echo "B-\n";
} elseif ($a >= 70) {
    if ($b >= 90) echo "B+\n";
    elseif ($b >= 80) echo "B\n";
    elseif ($b >= 70) echo "B-\n";
    else echo "C\n";
} else echo "D\n";