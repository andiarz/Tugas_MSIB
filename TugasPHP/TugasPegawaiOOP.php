
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
        $tunkel = ($this->status == 'Menikah')?($this->setGajiPokok() * 0.1): 0;
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

    public function cetak(){?>
         <table style="font-family:'Tahoma';">
            <tr>
                <td>NIP Pegawai</td>
                <td>:</td>
                <td><?=$this->nip?></td>
            </tr>
            <tr>
                <td>Nama this</td>
                <td>:</td>
                <td><?=$this->nama?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?=$this->jabatan?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?=$this->agama?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><?=$this->status?></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td>:</td>
                <td>Rp. <?=number_format($this->setGajiPokok()),'.00'?></td>
            </tr>
            <tr>
                <td>Tunjangan Jabatan</td>
                <td>:</td>
                <td>Rp. <?=number_format($this->setTunjab()),'.00'?></td>
            </tr>
            <tr>
                <td>Tunjangan Keluarga</td>
                <td>:</td>
                <td>Rp. <?=number_format($this->setTunkel()),'.00'?></td>
            </tr>
            <tr>
                <td>Zakat Profesi</td>
                <td>:</td>
                <td>Rp. <?=number_format($this->setZakatProfesi()),'.00'?></td>
            </tr>
            <tr>
                <td>Gaji Bersih</td>
                <td>:</td>
                <td>Rp. <?=number_format($this->setGajiBersih()),'.00'?></td>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
        </table>
    <?php }
 }?>
