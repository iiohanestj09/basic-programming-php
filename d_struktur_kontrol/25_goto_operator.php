<?php
// goto adalah operator yang digunakan untuk melompat langsubg ke baris kode tertentu yang ditandai dengan label 
// Label adalah sebuah nama yang diikuti oleh tanda titik dua (:)

echo "Baris 1\n";
goto lompat;                                    // Gerbang Buka goto  (goto namaX;)
echo "Baris 2 (Tidak akan dijalankan)\n";       // lingkunp goto

lompat:                                         // Gerbang Tutup goto  (namaX:)
echo "Baris 3 (Lompat ke sini)\n";


// Contoh menggunakan goto di nested loop
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($i == 1 && $j == 2) goto selesai;
        echo $i. "_". $j. "\n";
    }
} 
echo "Holla\n";
selesai: