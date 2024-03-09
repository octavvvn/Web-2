<?php
function tambah($nilai1, $nilai2)
{
    echo $nilai1 + $nilai2;
    //return $nilai1 + $nilai2;
    //kalo pake return ga jalan kalo pake echo jalan
}

tambah(1, 2);
echo "<br>";

function hitungUmur($tahunLahir)
{
    $tahunSekarang = 2024;
    $hasil = $tahunSekarang - $tahunLahir;
    echo $hasil;
}
hitungUmur(2004);

//versi singkat dan mudah dibaca
//function hitungUmur($tahunLahir, $tahunSekarang = 2024)
//{
 //   echo $tahunSekarang - $tahunLahir;
    
//}
//hitungUmur(1920);

