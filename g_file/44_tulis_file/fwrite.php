<?php
// 2. fwrite()
// Fungsi ini menulis data ke file langsung sekaligus
// Jika file belum ada -> akan dibuat
// Jika file sudah ada -> dengan fwrite() tidak akan overwrite

/*
+ Fleksibel utk proses tulis yg kompleks / file besar
+ Bisa mengatur posisi tulis (pakai fseek())
- Lebih banyak kode dibanding file_put_contents()
*/

$handle = fopen("text2.txt", "w");

fwrite($handle, "Baris pertama.");
fwrite($handle, "\nBaris kedua.");

fclose($handle);
echo "File berhasil ditulis.";