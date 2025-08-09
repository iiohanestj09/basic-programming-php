<?php

for ($i = 0; $i <= 7; $i++) {
    if ($i == 3) continue;      // Lewati iterasi angka 3
    if ($i == 5) break;         // Stop di angka 5
    echo $i. "\n";
}