<?php
/* 1. Local Scope
Variabel yg didefinisikan di dalam fungsi, hanya bisa diakses di dalam fungsi itu */ 
function halo() {
    $pesan = "Haloo dari fungsi\n";   // Local
    echo $pesan;
}

halo();
// echo $pesan; ERROR: Var tdk dikenal di luar fungsi


/* 2. Global
Variabel yg didefinsikan di luar fungsi, hanya bisa diakses langsung di luar fungsi. Tetapi bisa diakses di dalam fungsi menggunakan keyword 'global' atau '$GLOBALS' */
$nama = "Putra";    // Global
$umur = 20;

function sapa() {
    global $nama;   // Mengakses var global
    $GLOBALS['umur'];
    echo "Halo " . $nama . ", umurnya " . $GLOBALS['umur'] . "\n";
}

sapa();


/* 3. Static
Variabel lokal yg nilainya tetap tersimpan meskipun fungsi selesai dijalankan, sehingga nilainya TIDAK DIRESET saat fungsi dipanggil lagi */ 
function counter() {
    static $hitung = 0;
    $hitung++;
    echo $hitung . "\n";
}

counter();
counter();
counter();