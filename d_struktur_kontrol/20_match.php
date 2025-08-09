<?php
// Match mirip seperti switch tapi lebih ringkas, bisa mengembalikkan nilai dan tanpa break
// Match menggunakan perbandingan identik (===) sehingga tipe data juga harus sama

$hari = "Selasa";

$result = match($hari) {
    "Senin" => "Hari bekerja dimulai",
    "Sabtu" => "Weekend bro",
    "Minggu" => "Hari libur nasional",
    default => "Hari kerja biasa",
};

echo $result. "\n";