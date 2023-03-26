<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENGHITUNG GAJI PEGAWAI</title>
    <link rel="stylesheet" href="stylePegawai.css">
</head>
<body>
<div id="background">

<form method="POST" class="konten">
    <table width=50%>
    <tr class="judul">
        <td><p>PERHITUNGAN GAJI PEGAWAI PT HERSEKEN WERSEN</p><hr></td>
    </tr>
    <tr>
    <td><input class="desain-latar" type="text" name="pegawai" placeholder="Masukkan Nama Pegawai" required/></td>
    </tr>
    <tr>
    <td><select name="jabatan" class="desain-latar">
          <option>-- Pilihan Jabatan --</option>
          <option value="Manager">Manager</option>
          <option value="Asisten">Asisten</option>
          <option value="Kabag">Kabag</option>
          <option value="Staff">Staff</option>
        </select></td>
    </tr>
    <tr>
    <td><select name="status" class="desain-latar">
          <option>-- Status Pernikahan --</option>
          <option value="Menikah">Menikah</option>
          <option value="Belum Menikah">Belum Menikah</option>
        </select></td>
    </tr>
    <tr>
    <td><input class="desain-latar" type="number" name="jmlanak" placeholder="Jumlah Anak/Tanggungan" required/></td>
    </tr>
    <tr>
    <td><select name="agama" class="desain-latar">
          <option>-- Agama/Kepercayaan --</option>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Hindu">Hindu</option>
          <option value="Budha">Budha</option>
          <option value="Katolik">Katolik</option>
          <option value="Kong Hu Chu">Kong Hu Chu</option>
          <option value="Kepercayaan Lain">Kepercayaan Lain</option>
        </select></td>
    </tr>
    <tr>
        <td><button class="tombol" name="tambah" type="submit">Tambahkan</button></td>
</tr>

    </table>
</form>
<table width=50%>
        <?php 
    error_reporting(0);
    $pegawai = $_POST['pegawai'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];
    $jmlanak = $_POST['jmlanak'];
    $agama = $_POST['agama'];
    $tambah = $_POST['tambah'];

    switch($jabatan){
        case "Manager":$gajipokok = 20000000;break;
        case "Asisten":$gajipokok = 15000000;break;
        case "Kabag":$gajipokok = 10000000;break;
        case "Staff":$gajipokok =4000000;break;
    }

    $tunjanganjabatan = (0.2 * $gajipokok);

    if($status == "Menikah"){
        if($jmlanak<=2)$tunjangankeluarga=(0.05 * $gajipokok);
        else if($jmlanak>=3)$tunjangankeluarga=(0.1 * $gajipokok);
    }else if($status == "Belum Menikah"){
        $tunjangankeluarga=0;
    }else $tunjangankeluarga="";

    $gajikotor = ($gajipokok + $tunjanganjabatan + $tunjangankeluarga);
    
    $zakat_profesi = ($agama == "Islam" && $gajikotor>=6000000)? (0.025 * $gajikotor) : 0;

    $gajibersih = ($gajikotor - $zakat_profesi);


    if(isset($tambah)){
    ?>
    <tr>
        <td colspan="3"><p>TAMPILKAN HASIL</p><hr></td>
    <tr>
        <td>Nama Pegawai </td>
        <td>:</td> 
        <td><?= $pegawai ?></td>
    </tr>
    <tr>
        <td>Jabatan </td>
        <td>:</td> 
        <td><?= $jabatan ?></td>
    </tr>
    <tr>
        <td>Status </td>
        <td>:</td> 
        <td><?= $status ?></td>
    </tr>
    <tr>
        <td>Jumlah Anak/Tanggungan </td>
        <td>:</td> 
        <td><?= $jmlanak ?></td>
    </tr>
    <tr>
        <td>Agama/Kepercayaan </td>
        <td>:</td> 
        <td><?= $agama ?></td>
    </tr>
    <tr>
        <td colspan="3"><br><p>REKAP GAJI PEGAWAI</p></td>
    </tr>
    <tr>
        <td>Gaji Pokok </td>
        <td>=</td> 
        <td><?= $gajipokok ?></td>
    </tr>
    <tr>
        <td>Tunjangan Jabtan </td>
        <td>=</td> 
        <td><?= $tunjanganjabatan?></td>
    </tr>
    <tr>
        <td>Tunjangan Keluarga </td>
        <td>=</td> 
        <td><?= $tunjangankeluarga ?></td>
    </tr>
    <tr>
        <td>Gaji Kotor </td>
        <td>=</td> 
        <td><?= $gajikotor ?></td>
    </tr>
    <tr>
        <td>Zakat Profesi </td>
        <td>=</td> 
        <td><?= $zakat_profesi ?></td>
    </tr>
    <tr>
        <td></td>
        <td colspan="2"><hr></td>
    </tr>
    <tr>
        <td>Gaji Bersih </td>
        <td>=</td> 
        <td><?= $gajibersih ?></td>
    </tr>

    <?php } ?>
</table>
</div>
</body>
</html>