<?php
$data1 = ["Apel", "Jeruk", "Manggis"];
$data2 = [
    'nama' => 'Budi',
    'umur' => 20,
    'aktif' => true
];

// 1. Menggunakan foreach
  // Indexed Array
foreach ($data1 as $item) {
    echo "$item ";
}
echo PHP_EOL;

foreach ($data1 as $index => $item) {       // dengan index
    echo "$index: $item ";
}
echo PHP_EOL;

  // Associative Array
foreach ($data2 as $item) {     // Iterasi value saja
    echo "$item ";
}
echo PHP_EOL;

foreach(array_keys($data2) as $key) {       // Iterasi key saja  
    echo "$key ";
}
echo PHP_EOL;

foreach ($data2 as $key => $value) {        // Iterasi Lengkap
    echo "$key: $value ";
}
echo PHP_EOL;


// 2. Menggunakan for -> (Indexed Array)
for ($i = 0; $i < count($data1); $i++) {
    echo "$data1[$i] ";
}
echo PHP_EOL;


// 3. Menggunakan while + current() + next() -> (Indexed Array)
while ($item = current($data1)) {
    echo "$item ";
    next($data1);
}