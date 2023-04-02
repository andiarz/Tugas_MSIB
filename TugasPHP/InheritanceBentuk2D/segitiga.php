<?php
require_once 'abstract.php';
class Segitiga extends Bentuk2D {
    public $tinggi;
    public $alas;
    public function __construct($tinggi, $alas){
        $this->tinggi = $tinggi;
        $this->alas = $alas;
    }
    public function namaBidang(){
        echo "Segitiga Siku-Siku";
    }
    public function luasBidang(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = (sqrt(pow($this->alas, 2) + pow($this->tinggi, 2))) + $this->tinggi + $this->alas;
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
            <td>Alas/Sisi A</td>
                <td>:</td>
                <td><?=$this->alas?></td>
            </tr>
            <td>Tinggi/Sisi B</td>
                <td>:</td>
                <td><?=$this->tinggi?></td>
            </tr>
        <tr align="center">
                <td colspan="3">Perhitungan</td>
            </tr>
            <td>Luas Segitiga Siku-Siku</td>
                <td>:</td>
                <td><?=$this->luasBidang()?></td>
            </tr>
            <td>Keliling Segitiga Siku-Siku</td>
                <td>:</td>
                <td><?=$this->kelilingBidang()?></td>
            </tr>
        </table>
        <br>
<?php }
}?>

<style>
    table{
        margin-left:auto;
        margin-right:auto;
        font-size:2rem;
        font-family:"Lucida Sans";
    }
</style>
