<?php
// 1. membuat fungsi
function salam() {
    echo "Hallooo Duniaa\n";
}
salam();


// 2. Function dengan parameter
function sapa($nama) {
    echo "Hallo ". $nama. "\n";
}
sapa("Budi");


// 3. Function dengan default parameter
function panggil($nama = "Brooo") {
    echo "Haii ". $nama. "\n";
}
panggil();


// 4. Function dengan return value
function tambah($a, $b) {
    return $a + $b;
}
echo tambah(2, 3). "\n";


// 5. Function dengan type declaration
function kali(int $a, int $b) {
    return $a * $b;
}
// echo kali(2.2, 3). "\n";     Deprecated: semacam warning bahwa (float) 2.2 akan diubah jadi (int) 2 di fungsi
echo kali(3, 3). "\n";


// 6. Variabel Scope
$globalScope = 10;
function coba() {
    global $globalScope;
    echo $globalScope. "\n";
}
coba();