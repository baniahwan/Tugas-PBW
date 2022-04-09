<?php
//Tugas Praktikum PBW
$mobil1 = array("Toyota","Mitsubishi","Tesla","Honda");
$mobil2 = array("satu"=>"Toyota","dua"=>"Mitsubishi","tiga"=>"Tesla","empat"=>"Honda");

//a. Tampilkan numberik array ($mobil1) menggunakan for – loop dan while – loop !
for($i=0;$i<=4;$i++)
{
echo $mobil1[$i] . "<br>";
}

//b. Tampilkan associative array ($mobil2) menggunakan foreach – loop !
foreach($mobil2 as $k=>$v)
{
echo $k . " : " . $v . "<br>";
}

?>