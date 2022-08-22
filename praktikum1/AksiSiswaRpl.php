<?php
require('SiswaRpl.php');
$Siswa3 = new SiswaRpl();
$Siswa3->IsiData("K4161","Maharani","2004","Jakarta");
$Siswa3->CetakData();
$Siswa3->JudulLaporan("Laporan PKL PT OLIMPYQ");
$Siswa3->CetakData();
?>