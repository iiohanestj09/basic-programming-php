<?php
// Fungsi ini menulis data ke file langsung sekaligus
// Jika file belum ada -> akan dibuat
// Jika file sudah ada -> isinya akan ditimpa (overwrite), kecuali pakai flag tertentu

$handle = fopen("text2.txt", "w");

fwrite($handle, "Baris pertama.");
fwrite($handle, "\nBaris kedua.");

fclose($handle);
echo "File berhasil ditulis.";