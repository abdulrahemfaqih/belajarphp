<?php

// 1
// $nama = "faqih";
// $kapital = ucwords($nama);
// $besar = strtoupper($nama);

// echo $nama . "<br>";
// echo $kapital . "<br>";
// echo $besar . "<br>";

//2

// function volKer(int|float $tinggi, int|float $jari2) : int|float {
//     $phi = $jari2 % 7 == 0 ? 22/7 : 3.14;
//     $result = 1/3 * $phi * $jari2**2 * $tinggi;
//     return $result;
// }

// echo "volume A : " . volKer(18, 7) . " cm<sup>3</sup><br>";
// echo "volume B : " . volKer(118, 7) . " cm<sup>3</sup>";

//3

function hitung(string $kalimat) : string {

    return strlen(str_replace(" ", "", $kalimat)) * str_word_count($kalimat);
}
echo "Hasil perkalian jumlah huruf dan angka = " . hitung("teknik informasyik itu prodi paling santuy");