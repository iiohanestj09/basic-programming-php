<?php
// Array Destructuring adalah fitur utk mengekstrak nilai dari array ke dalam variabel langsung

// 1. Destructuring Indexed Array  -> [$var1, $var2, ...] = $array
$data = ['Tono', 35, true];

  // Versi list()
list($nama, $usia, $isMarriage) = $data;
echo "$nama $usia $isMarriage\n";

// Versi []
[$nama, $usia, $isMarriage] = $data;
echo "$nama $usia $isMarriage\n";


// 2. Melewati Nilai yg tidak diperlukan
$data = ['Alice', 25, false];
[$nama, , $isMarriage] = $data;
echo "$nama " . ((int) $isMarriage) . PHP_EOL;


// 3. Destructuring pada Array Bersarang
$dataX = ["Lili", [20, false]];

[$nama, [$usia, $isMarriage]] = $dataX;


// 4. Destructuring Associative Array  -> ['key1' => $var1, 'key2' => $var2, ...] = $array
$dataY = [
    'nama' => 'Dono',
    'usia' => 50,
    'isMarriage' => true
];

['nama' => $nama, 'usia' => $usia, 'isMarriage' => $isMarriage] = $dataY;
echo "$nama $usia $isMarriage\n";


// 5. Destructuring Hasil Fungsi
function getUser() {
    return ['Bob', 30, false];
}

[$nama, $usia, ] = getUser();
echo "$nama $usia\n";