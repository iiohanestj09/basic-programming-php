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