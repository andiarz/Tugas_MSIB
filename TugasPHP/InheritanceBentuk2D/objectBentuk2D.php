<?php
require_once 'Lingkaran.php';
require_once 'persegipanjang.php';
require_once 'segitiga.php';
$l1 = new Lingkaran (21);
$l2 = new Lingkaran (19);
$l3 = new Lingkaran (49.35);
$p1 = new PersegiPanjang(20, 10);
$p2 = new PersegiPanjang(27, 19);
$p3 = new PersegiPanjang(33.3, 11.1);
$s1 = new Segitiga(5, 13);
$s2 = new Segitiga(3, 4);
$s3 = new Segitiga(17.4, 43.1);

$ar_bentuk = [$l1,$l2, $l3, $p1, $p2, $p3, $s1, $s2, $s3];

echo "<h1 align='center'>PEWARISAN BENTUK 2 DIMENSI<br><h1>";
foreach ($ar_bentuk as $bentuk){
    $bentuk->cetak();
}


?>