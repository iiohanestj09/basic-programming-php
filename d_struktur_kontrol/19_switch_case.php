<?php
// switch di PHP menggunakan perbandingan longgar (==). Sehingga untuk mendapatkan nilai yang sesuai juga tipe data nya (===) gunakan if..else

$hari = "Sabtu";

switch ($hari) {
    case "Sabtu":               // Akan mengikuti di bawahnya kecuali default
    case "Minggu" :
        echo "Weekend Broo!";
        break;
    default: 
        echo "Weekdays";
}