<?php
// number_format(number, decimals, decimal_separator, thousands_separator)

// 1. Format tanpa desimal
echo number_format(1500000) . PHP_EOL;
echo number_format(1500000.999) . PHP_EOL;      // Akan dibulatkan otomatis


// 2. Format dengan desimal
echo number_format(150000.124, 2) . PHP_EOL;    // 0 - 4 dibulatkan kebawah
echo number_format(150000.125, 2) . PHP_EOL;    // 5 - 9 dibulatkan ke atas
echo number_format(150000.123, 4) . PHP_EOL;


// 3, Menggunakan pemisah desimal & ribuan kostum
echo number_format(150000000.1255, 3, ",", ".") . PHP_EOL;


// 4. Format mata uang Rupiah
echo "Rp " . number_format(2500000.560, 2, ",", ".") . PHP_EOL;