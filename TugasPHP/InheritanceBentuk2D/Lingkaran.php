<?php
require_once 'abstract.php';
class Lingkaran extends Bentuk2D {
    public $jari2;
    public function __construct($jari2){
        $this->jari2 = $jari2;
    }
    public function namaBidang(){
        echo "Lingkaran";
    }
    public function luasBidang(){
        $luas = 3.14*$this->jari2 * $this->jari2;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = 2 * 3.14 * $this->jari2;
        return $keliling;
    }
    public function cetak(){?>
    <table border="1">
        <tr>
            <td>Nama Bidang</td>
            <td>:</td>
            <td><?=$this->namaBidang()?></td>
        </tr>
        <tr align="center">
            <td colspan="3">Statistik Bidang</td>
        </tr>
        <td>Jari-Jari</td>
            <td>:</td>
            <td><?=$this->jari2?></td>
        </tr>
        <tr align="center">
            <td colspan="3">Perhitungan</td>
        </tr>
        <td>Luas Lingkaran</td>
            <td>:</td>
            <td><?=$this->luasBidang()?></td>
        </tr>
        <td>Keliling Lingkaran</td>
            <td>:</td>
            <td><?=$this->kelilingBidang()?></td>
        </tr>
    </table>
    <br>
    <?php }
}

?>

<style>
    table{
        margin-left:auto;
        margin-right:auto;
        font-size:2rem;
        font-family:"Lucida Sans";
    }
</style>