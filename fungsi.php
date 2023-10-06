<?php
$angka = 1;

function cekAngka(int|float $angka) : void{
    $result = $angka % 2 == 0 ? "$angka adalah bilangan genap" : "$angka adalah bilangan ganjil";
    echo $result;
}


echo cekAngka($angka);