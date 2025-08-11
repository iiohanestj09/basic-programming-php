<?php
// Manipulasi Jenis Associative Array

$mahasiswa = [
    'nama' => 'Budi',
    'umur' => 20,
    'jurusan' => 'Informatika'
];

// 1. Menamba Data
$mahasiswa['ipk'] = 3.81;
print_r($mahasiswa);


// 2. Menghapus Data
unset($mahasiswa['ipk']);


// 3. mengubah Value
$mahasiswa['umur'] = 22;


// 4. Mengecek Key atau value
  // Cek Key
if (array_key_exists('jurusan', $mahasiswa)) {
    echo "key 'jurusan' ditemukan\n";
}

  // Cek Value
if (in_array('Budi', $mahasiswa)) {
    echo "Budi ada di array\n";
}


// 5. Mengambil semua Key dan Value
$keys = array_keys($mahasiswa);
$values = array_values($mahasiswa);
print_r($keys);
print_r($values);


// 6. Menggabungkan Array
$data1 = ["nama" => "Budi", "umur" => 20];
$data2 = ["jurusan" => "Informatika", "ipk" => 3.8];

$gabung = array_merge($data1, $data2);
print_r($gabung);


// 7. Mengurutkan Array
  // Urut berdasarkan Key (Ascending)
ksort($mahasiswa);

  // Urut berdasarkan Key (Descending)
krsort($mahasiswa);

  // Urut berdasarkan Value (Ascending)
asort($mahasiswa);

  // Urut berdasarkan Value (Descending)
arsort($mahasiswa);

print_r($mahasiswa);