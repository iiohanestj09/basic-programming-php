<?php
// Jika ingin membuat variabel yang immutable (tidak bisa dirubah), maka bisa menggunakan const atau function define()
// Best practice variabel constant itu nama var nya upperCase

// const  -> const NAMA = value
const NAMA = "Putra";
const PI = 3.41;

// define  -> define("NAMA", value)
define("JENISKEL", "Pria");
define("APP_VERSION", 100);


// Pemanggilannya tanpa perlu '$'
echo NAMA . "\n";
echo PI . "\n";
echo JENISKEL . "\n";
echo APP_VERSION . "\n";


// Magic Constant  -> Nilai otomatis dari PHP
echo __LINE__ . "\n";       // Nomor baris skrip saat ini
echo __FILE__ . "\n";       // Path lengkap file saat ini    
echo __DIR__ . "\n";        // Direktori file saat ini
echo __FUNCTION__ . "\n";   // Nama fungsi saat ini
echo __CLASS__ . "\n";      // Nama class saat ini
echo __METHOD__ . "\n";     // Nama method saat ini
echo __NAMESPACE__ . "\n";  // Namespace saat ini