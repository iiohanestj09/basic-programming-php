<?php
// Named arguments memungkinkan kita memanggil fungsi dengan menyebutkan nama parameter secara eksplisit

// 1. Contoh
function createProfile($name, $age, $country) {
    echo "Name: $name, Age: $age, Country: $country\n";
}

  // Pemanggilan Biasa
createProfile("Putra", 20, "Indonesia");

  // Pemanggilan menggunakan Named Arguments
createProfile(
    country: "Indonesia",
    name: "Putra",
    age: 25
);

//? Note: Tidak boleh mencampur parameter posisi biasa dnegan named arguments setelahnya kecual parameter posisi sudah terisi / default
// createProfile("Putra", age: 99, "Indonesia")     ERROR