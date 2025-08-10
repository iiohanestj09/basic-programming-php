<?php
// 1. Parameter Type hinting
function kali(int $a, int $b) {
    return $a * $b;
}
// echo kali(2.2, 3). "\n";     Deprecated: semacam warning bahwa (float) 2.2 akan diubah jadi (int) 2 di fungsi
echo kali(3, 3). "\n";


// 2. Return type hinting
function bagi(float $a, float $b): bool {
    return $a / $b;
}
var_dump(bagi(0, 4));


// 3. Return type void  -> jika fungsi tidak mengembalikan nilai
function sapa($pesan): void {
    echo $pesan . "\n";
}
sapa("Haloooo Budiii");


// 4. Nullable Type return  -> Gunakan ? di depan retrun type hinting utk tahu kalau bisa nilai null
function coba1($a): ?bool {
    if ($a == false) return null;
    return $a;
}
var_dump(coba1(false));        // Warning