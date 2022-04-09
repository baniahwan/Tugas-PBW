<?php 
// Tugas Praktikum PBW
//1. buatlah sebuah kondisi untuk menentukan suatu variabel itu berisi huruf vokal(a,i,u,e,o) atau bukan ?
$huruf = "A"; 
if (($huruf == "A") || ($huruf == "I") || ($huruf == "U")|| ($huruf == "E") || 
($huruf == "O")) 
{ 
echo $huruf;
echo "\n";
echo "Termasuk huruf vokal"; 
} 
else 
{ 
echo $huruf;
echo "\n";
echo "Tidak termasuk huruf vokal"; 
} 

?> 
