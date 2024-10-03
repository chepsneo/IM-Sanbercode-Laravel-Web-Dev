<?php

// catatan : Mengirim file/data  yang berisi class-class yang dibutuhkan disajikan dari 3 kategori
require 'animal.php';
require 'ape.php';
require 'frog.php';

// Membuat instance dari kategori (Animal.php)
$sheep = new Animal("shaun");
echo "Nama: " . $sheep->name . "<br>"; // Nama : shaun
echo "Jumlah kaki: " . $sheep->legs . "<br>"; // Jumlah berkaki (4)
echo "Cold blooded: " . $sheep->cold_blooded . "<br>"; // Cold blooded: no
echo "<br>";

// Membuat instance dari kategori (Ape.php)
$sungokong = new Ape("kera sakti");
echo "Nama: " . $sungokong->name . "<br>"; // Nama : kera sakti
echo "Jumlah kaki: " . $sungokong->legs . "<br>"; // Jumlah berkaki: 2
$sungokong->yell(); // Auooo outputnya
echo "<br> <br>";

// Membuat instance dari kategori (Frog.php)
$kodok = new Frog("buduk");
echo "Nama: " . $kodok->name . "<br>"; // Nama : buduk
echo "Jumlah kaki: " . $kodok->legs . "<br>"; // jumlah berkaki: 4
$kodok->jump(); // outputnya (hop hop)

?>
