<?php 
class Pesanan{
    private $koneksi;
    public function __construct(){
        global $dbh; //instance object koneksi.php
        $this->koneksi = $dbh;
    }
    public function dataPesanan(){
        $sql = "SELECT pesanan.*, pelanggan.nama as Kategori FROM pesanan INNER JOIN
        pelanggan ON pelanggan.id = pesanan.pelanggan_id";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}

?>