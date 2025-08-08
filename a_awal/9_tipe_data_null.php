<?php 
// NULL adalah tipe data khusus yang menandakan tidak ada nilai atau kosong.
/* Variabel NULL:
- Tidak memiliki nilai apa pun
- Tidak mengacu pada alamat memori berisi data lain
- Bersifat case-sensitive (Bisa ditulis NULL, null, Null)
*/

$var1 = NULL;
$var2 = Null;
$var3 = null;
$var4;          // Warning
var_dump($var1, $var2, $var3, $var4);
