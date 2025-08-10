<?php
// 1. Membuat fungsi
function salam() {
    echo "Hallooo Duniaa\n";
}
salam();


// 2. Fungsi dengan parameter
function sapa($nama) {
    echo "Hallo ". $nama. "\n";
}
sapa("Budi");


// 3. Fungsi dengan default value parameter
function panggil($coba, $nama = "Brooo",) {  //? Param dengan default value harus berada di belakang daftar param
    echo "Haii ". $nama. "\n". $coba. "\n";
}
panggil("Apalah");


// 4. Fungsi dengan return value
function tambah($a, $b) {
    return $a + $b;
}
echo tambah(2, 3). "\n";


// 5. Variabel Scope
$globalScope = 10;

function coba() {
    global $globalScope;
    echo $globalScope. "\n";
}
coba();