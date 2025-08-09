<?php
// switch di PHP menggunakan perbandingan longgar (==). Sehingga untuk mendapatkan nilai yang sesuai juga tipe data nya (===) gunakan if..else ataupun Mathc (PHP 8+)

$hari = "Sabtu";

switch ($hari) {
    case "Sabtu":               // Akan mengikuti di bawahnya kecuali default
    case "Minggu" :
        echo "Weekend Broo!";
        break;
    default: 
        echo "Weekdays";
}