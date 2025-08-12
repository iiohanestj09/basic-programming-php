<?php
// 1. file_put_contents()
// Fungsi ini menulis data ke file langsung sekaligus
// Jika file belum ada -> akan dibuat
// Jika file sudah ada -> isinya akan ditimpa (overwrite), kecuali pakai flag tertentu

/*
+ Sederhana & cepat utk file kecil/menengah
+ Sekali panggil langsung selesai
- Tidak cocok utk file besar yg perlu ditulis bertahap
*/

// 1. Menulis teks baru
file_put_contents("text1.txt", "Haloo, ini isi file baru.");
echo "File berhasil ditulis\n";


// 2. Menambah teks di akhir (append)
file_put_contents("text1.txt", "\nTambahan teks.", FILE_APPEND);
echo "Teks berhasil ditambahkan\n";