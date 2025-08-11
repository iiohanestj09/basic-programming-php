<?php
// Callback function adalah fungsi yg DIKIRIMKAN SEBAGAI ARGUMEN ke fungsi lain, lalu dipanggil kembali (callback) di dalam fungsi tsb

// 1. Contoh
function sayHello($name) {
    return "Hello, $name!";
}

function runCallback($callback, $name) {
    echo $callback($name) . "\n";
}

runCallback('sayHello', 'Putra');       // String sayHello menjadi fungsi yang sudah ada di baris 5


// 2. Contoh menggunakan Anonymous Function
function processNumber($callback, $number) {
    return $callback($number);
}

$result = processNumber(fn($n) => $n * $n, 5);
echo $result . "\n";


// Contoh 3
function prosesData($data, $callbackY) {
    echo "Memproses: $data\n";
    echo $callbackY(strtoupper($data));
}

prosesData("Putra", fn($hasil) => "Hasil: $hasil\n");

