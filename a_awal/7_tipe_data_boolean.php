<?php
// Boolean hanya memiliki 2 nilai: true dan false
/* PHP juga akan secara otomatis mengoversi nilai tertentu ke boolean dalam kondisi tertentu (type juggling): 
# Menjadi false jika:
  - 0  (int)
  - ""  (string kosong)
  - "0"  (string)
  - null
  - []  (Array kosong)
  - Objek tanpa properti (dalam konteks tertentu)
# Selain itu, nilainya akan dianggap true
*/

$is_admin = true;
$is_offline = false;

var_dump($is_admin);
var_dump($is_offline);

var_dump((bool) 0);
var_dump((bool) "");
var_dump((bool) "0");
var_dump((bool) []);

var_dump((bool) 42);
var_dump((bool) "PHP");


