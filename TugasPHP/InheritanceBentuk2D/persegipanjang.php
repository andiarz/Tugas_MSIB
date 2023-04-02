<?php
require_once 'abstract.php';
class PersegiPanjang extends Bentuk2D {
    public $panjang;
    public $lebar;
    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namaBidang(){
        echo "Persegi Panjang";
    }
    public function luasBidang(){
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = 2 * ($this->panjang + $this->lebar);
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
        <td>Panjang</td>
            <td>:</td>
            <td><?=$this->panjang?></td>
        </tr>
        <td>Lebar</td>
            <td>:</td>
            <td><?=$this->lebar?></td>
        </tr>
        <tr align="center">
            <td colspan="3">Perhitungan</td>
        </tr>
        <td>Luas Persegi Panjang</td>
            <td>:</td>
            <td><?=$this->luasBidang()?></td>
        </tr>
        <td>Keliling Persegi Panjang</td>
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
