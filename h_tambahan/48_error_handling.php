<?php
/* Struktur Dasar
try {
    ? Bagian kode yang mungkin menghasilkan error
} catch (Exception $e) {
    ? Bagian ini dijalankan jika terjadi error (exception)
} finally {
    ? Bagian ini akan selalu dijalankan, baik error atau tidak
}
*/

// Contoh 1: Menangani error file tidak ada
try {
    if (!file_exists("text.txt")) throw new Exception("File tidak ditemukan!");
    else echo "File ditemukan.\n";
} catch (Exception $e) {
    echo "Terjadi Error: " . $e->getMessage();
}
echo PHP_EOL . PHP_EOL;


// Contoh 2: Menggunakan finally
function bagi($a, $b) {
    if ($b === 0) throw new Exception("Tidak bisa membagi dengan nol.");
    else return $a / $b; 
}

try {
    echo bagi(10, 0);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    echo "\nProses Selesai.\n\n";
}


// Contoh 3: Menangkap beberapa jenis error
function prosesData($data) {
    try {
        if (!is_array($data)) throw new InvalidArgumentException("Data harus berupa array.\n");
        elseif (empty($data)) throw new Exception("Data tidak boleh kosong.\n");
        else return "Jumlah elemen: " . count($data) . PHP_EOL;
    } catch (InvalidArgumentException $e) {
        echo "Kesalahan argumen: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Kesalahan umum: " . $e->getMessage();
    }
}

echo prosesData("apalah");
echo prosesData([]);
echo prosesData([1, 2, 3]);

