<?php
//Tugas Praktikum PBW
//3. menggunakan switch buatlah kode untuk menentukan hari berdasarkan case number ( 1 – 7) 
//yang missal jika case itu 1 maka hari senin !
$angka = 1; 
switch($angka) 
{ 
case 1 : $namaHari = "Senin"; 
break; 
case 2 : $namaHari = "Selasa"; 
break; 
case 3 : $namaHari = "Rabu"; 
break; 
case 4 : $namaHari = "Kamis"; 
break; 
case 5 : $namaHari = "Jumat"; 
break; 
case 6 : $namaHari = "Sabtu"; 
break; 
case 7 : $namaHari = "Minggu"; 
break; 
}
echo "Hari ini adalah : ".$namaHari;






?>