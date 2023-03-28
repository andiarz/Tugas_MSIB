<?php 
$m1 = ['NIM'=>'01111021', 'nama'=>'Azekya Ryu', 'nilai'=>80];
$m2 = ['NIM'=>'01111022', 'nama'=>'Berniana Hiata', 'nilai'=>70];
$m3 = ['NIM'=>'01111023', 'nama'=>'Dozk Recrezers', 'nilai'=>50];
$m4 = ['NIM'=>'01111024', 'nama'=>'Drezn Yozaku', 'nilai'=>40];
$m5 = ['NIM'=>'01111025', 'nama'=>'Gernian Miazelin', 'nilai'=>90];
$m6 = ['NIM'=>'01111026', 'nama'=>'Hugersian Herviard', 'nilai'=>75];
$m7 = ['NIM'=>'01111027', 'nama'=>'Izekya Meriana', 'nilai'=>30];
$m8 = ['NIM'=>'01111028', 'nama'=>'Mezk Arnolda', 'nilai'=>85];
$m9 = ['NIM'=>'01111028', 'nama'=>'Qern Wern', 'nilai'=>45];
$m10 = ['NIM'=>'01111028', 'nama'=>'Wesrakya Xerbana', 'nilai'=>10];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];
$ar_judul = ['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat']

/* Tugas 
1. Buat grade 
2. Buat Keterangan jumlah mahasiswa, nilai tertinggi, nilai terendah, rata rata Masukan kedalam tfoot
3. Buat predikat dari nilai menggunakan switch case
*/
?>

<table border="1px" width="100%" bgcolor="yellowgreen">
<thead bgcolor="yellow">
    <tr align="center">
        <td colspan="7"><b><h2>DATA NILAI MAHASISWA</h2></b></td>
    </tr>
    <tr>
    <?php 
    foreach($ar_judul as $judul){
        ?>
        <th><?= $judul ?></th>
        <?php }?>
    </tr>

</thead>
<tbody>
<?php
$no = 1;
foreach($mahasiswa as $mhs){
$ket = ($mhs['nilai']>= 60) ? 'Lulus' : 'Tidak lulus';
//grade 
if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = 'A';
else if ($mhs['nilai']>= 75 && $mhs['nilai'] < 85) $grade = 'B';
else if ($mhs['nilai']>= 60 && $mhs['nilai'] < 75) $grade = 'C';
else if ($mhs['nilai']>= 30 && $mhs['nilai'] < 60) $grade = 'D';
else if ($mhs['nilai']>= 0 && $mhs['nilai'] < 30) $grade = 'E';
else $grade = '';

//predikat
switch($grade){
    case $mhs['nilai'] >= 85 && $mhs['nilai'] <= 100:$predikat = "Sangat Baik";break;
    case $mhs['nilai']>= 75 && $mhs['nilai'] < 85:$predikat = "Baik";break;
    case $mhs['nilai']>= 60 && $mhs['nilai'] < 75:$predikat = "Cukup";break;
    case $mhs['nilai']>= 30 && $mhs['nilai'] < 60:$predikat = "Kurang";break;
    case $mhs['nilai']>= 0 && $mhs['nilai'] < 30:$predikat = "Sangat Kurang";break;
    default:$predikat = "";
}
    ?>
    <tr>
        <td align="center"><?= $no ?> </td>
        <td><?= $mhs['NIM']?></td>
        <td><?= $mhs['nama']?></td>
        <td><?= $mhs['nilai']?></td>
        <td><?= $ket ?></td>
        <td><?= $grade ?></td>
        <td><?= $predikat ?></td>
</tr>
<?php $no++; } ?>
</tbody>
<tfoot>
    <tr align="center" bgcolor="yellow">
        <td colspan="7"><b><h2>DATA STATISTIK</h2></b></td>
    </tr>
    <tr align="center">
        <td colspan="6"><b>Jumlah Mahasiswa</b></td>
        <td><?php
        $jumlah_mhs = count($mahasiswa);
        echo" $jumlah_mhs";
        ?></td>
    </tr>
    <tr align="center">
        <td colspan="6"><b>Jumlah Mahasiswa Lulus</b></td>
        <td><?php
        $jumlah_lulus = 0;
        foreach($mahasiswa as $mhs){
            if($mhs['nilai'] >= 60){
                $jumlah_lulus++;
            }
        }
        echo" $jumlah_lulus";
        ?></td>
    </tr>
    <tr align="center">
        <td colspan="6"><b>Jumlah Mahasiswa Lulus</b></td>
        <td><?php
        $jumlah_tidaklulus = 0;
        foreach($mahasiswa as $mhs){
            if($mhs['nilai'] < 60){
                $jumlah_tidaklulus++;
            }
        }
        echo" $jumlah_tidaklulus";
        ?></td>
    </tr>
    <tr align="center" bgcolor="green">
        <td colspan="3"><b>Nilai Tertinggi</b></td>
        <td>Nama Terkait</td>
        <td><?php
        $nilai_tertinggi = 0;
        $nama_mhs = "";
        foreach($mahasiswa as $mhs){
            if($mhs['nilai'] > $nilai_tertinggi){
                $nilai_tertinggi = $mhs['nilai'];
                $nama_mhs = $mhs['nama'];
            }
        }
        echo "$nama_mhs";
        ?></td>
        <td>Perolehan Nilai</td>
        <td><?php
        echo" $nilai_tertinggi";
        ?></td>
    </tr>
    <tr align="center" bgcolor="red">
        <td colspan="3"><b>Nilai Terendah</b></td>
        <td>Nama Terkait</td>
        <td><?php
        $nilai_terendah = 100;
        $nama_mhs = "";
        foreach($mahasiswa as $mhs){
            if($mhs['nilai'] < $nilai_terendah){
                $nilai_terendah = $mhs['nilai'];
                $nama_mhs = $mhs['nama'];
            }
        }
        echo "$nama_mhs";
        ?></td>
        <td>Perolehan Nilai</td>
        <td><?php
        echo" $nilai_terendah";
        ?></td>
    </tr>
    <tr align="center" bgcolor="blue">
        <td colspan="6"><b>Rata-Rata Nilai</b></td>
        <td><?php
        $jumlah_nilai = count($mahasiswa);
        $total_nilai=0;
        foreach($mahasiswa as $mhs){
            $total_nilai += $mhs['nilai'];
        }
        $rata_rata = $total_nilai/$jumlah_nilai;
        echo" $rata_rata";
        ?></td>
    </tr>
</tfoot>
</table>