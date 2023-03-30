
<?php
class Pegawai{
    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;
    static $jml = 0;
    const PT = 'PT. HTP Indonesia';

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }

    public function setGajiPokok(){
        $gapok=0;
        switch($this->jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 5000000; break;
            default: $gapok = 0;
        }
        return $gapok;
    }

    public function setTunjab(){
        $tunjab=0;
        switch($this->jabatan){
            case 'Manager': $tunjab = 15000000 * 0.2; break;
            case 'Asisten Manager': $tunjab = 10000000 * 0.2; break;
            case 'Kepala Bagian': $tunjab = 7000000 * 0.2; break;
            case 'Staff': $tunjab = 5000000 * 0.2; break;
            default: $tunjab = 0;
        }
        return $tunjab;
    }

    public function setTunkel(){
        $tunkel = 0;
        if($this->status == 'Menikah'){
            switch($this->jabatan){
                case 'Manager': $tunkel = 15000000 * 0.1; break;
                case 'Asisten Manager': $tunkel = 10000000 * 0.1; break;
                case 'Kepala Bagian': $tunkel = 7000000 * 0.1; break;
                case 'Staff': $tunkel = 5000000 * 0.1; break;
                default: $tunkel = 0;
            }  
        }else{
            $tunkel = 0;
        }
        return $tunkel;
    }

    public function setZakatProfesi(){
        $zakat = 0;
        if($this->agama == 'Islam' && $this->setGajiPokok() >= 6000000 ){
            $zakat = $this->setGajiPokok() * 0.025;
        }else{
            $zakat = 0;
        }
        return $zakat;
    }

    public function setGajiBersih(){
        return $this->setGajiPokok() + $this->setTunjab() + $this->setTunkel() - $this->setZakatProfesi();
    }

}

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
    ?>
        <table style="font-family:'Tahoma';">
            <tr>
                <td>NIP Pegawai</td>
                <td>:</td>
                <td><?=$pegawai->nip?></td>
            </tr>
            <tr>
                <td>Nama Pegawai</td>
                <td>:</td>
                <td><?=$pegawai->nama?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?=$pegawai->jabatan?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?=$pegawai->agama?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><?=$pegawai->status?></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td>:</td>
                <td>Rp. <?=number_format($pegawai->setGajiPokok()),'.00'?></td>
            </tr>
            <tr>
                <td>Tunjangan Jabatan</td>
                <td>:</td>
                <td>Rp. <?=number_format($pegawai->setTunjab()),'.00'?></td>
            </tr>
            <tr>
                <td>Tunjangan Keluarga</td>
                <td>:</td>
                <td>Rp. <?=number_format($pegawai->setTunkel()),'.00'?></td>
            </tr>
            <tr>
                <td>Zakat Profesi</td>
                <td>:</td>
                <td>Rp. <?=number_format($pegawai->setZakatProfesi()),'.00'?></td>
            </tr>
            <tr>
                <td>Gaji Bersih</td>
                <td>:</td>
                <td>Rp. <?=number_format($pegawai->setGajiBersih()),'.00'?></td>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
        </table>
<?php } ?>


?>
