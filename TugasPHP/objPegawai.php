<?php 
require 'TugasPegawaiOOP.php';

$pegawai0 = new Pegawai('01110','Abdi','Kepala Bagian','Hindu','Menikah');
$pegawai1 = new Pegawai('01111','Andi','Manager','Islam','Belum Menikah');
$pegawai2 = new Pegawai('01112','Celina','Manager','Kristen','Menikah');
$pegawai3 = new Pegawai('01113','Deni','Staff','Islam','Menikah');
$pegawai4 = new Pegawai('01114','Gina','Asisten Manager','Katolik','Belum Menikah');
$pegawai5 = new Pegawai('01115','Jelsi','Kepala Bagian','Budha','Menikah');
$pegawai6 = new Pegawai('01116','Meriana','Manager','Kristen','Menikah');
$pegawai7 = new Pegawai('01117','Pras','Staff','Islam','Menikah');
$pegawai8 = new Pegawai('01118','Wenly','Asisten Manager','Kong Hu Chu','Belum Menikah');
$pegawai9 = new Pegawai('01119','Yohan','Kepala Bagian','Islam','Menikah');



$ar_pegawai = [$pegawai0, $pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5, $pegawai6, $pegawai7, $pegawai8, $pegawai9];


foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}


?>