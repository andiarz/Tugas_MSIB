<?php
$arr_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika","TK"=>"Teknologi Informasi","TE"=>"Teknik Elektro","TEKKOM"=>"Teknik Komputer","SE"=>"Software Enginering"];

$arr_skill = ["HTML"=>10,"CSS"=>10, "UI/UX"=>10,"Javascript"=>20, "RWD Bootstrap"=>20, "PHP"=>30, "MySQL"=>30, "Laravel"=>40, "Rest API"=>20,];
$domisili = ["Jakarta","Bandung","Bekasi","Malang","Surabaya", "Semarang","Yogyakarta","Lainnya"];
?>
<fieldset style="background-color:aquamarine;">
    <legend align="center">Form Registrasi Kelompok Belajar</legend>
<table width="80%" class="menu">
    <thead>
        <tr>
            <th colspan="3">Form Registrasi</th>
        </tr>
    </thead>
    <tbody>
        <form method="POST">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td> 
                    <input type="text" name="nim" class="bar">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td> 
                    <input type="text" name="nama" class="bar">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td> 
                    <input type="radio" name="jk" value="Laki-laki" class="tampilan">Laki-Laki &nbsp;
                    <input type="radio" name="jk" value="Laki-laki" class="tampilan">Perempuan 
                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td> 
                    <select name="prodi" class="bar">
                        <?php 

                        foreach($arr_prodi as $prodi => $v){
                            ?>
                            <option value="<?= $prodi ?>"><?= $v ?></option>
                       <?php } ?>
                        </select>
                </td>
            </tr>
            <tr>
                <td>Skill Programming</td>
                <td>:</td>
                <td class="tampilan"> 
                    <?php 
                    foreach ($arr_skill as $skill => $s){
                        ?>
                    <input type="checkbox" name="skill[]"value="<?= $skill ?>" ><?= $skill ?>

                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td>:</td>
                <td> 
                    <select name="domisili" class="bar">
                        <?php 

                        foreach($domisili as $d){
                            ?>
                            <option value="<?= $d ?>"><?= $d ?></option>
                       <?php } ?>
                        </select>
                </td>
            </tr>
            <tfoot>
                <tr>
                    <th colspan="3">
                        <button name="proses">Submit</button>
                    </th>
                </tr>
            </tfoot>
    </table>
            

</fieldset>
<?php 

if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
}
?>
<table class="latar">
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td><?= $nim ?></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?= $nama ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?= $jk ?></td>
    </tr>
    <tr>
        <td>Program Studi</td>
        <td>:</td>
        <td><?= $prodi ?></td>
    </tr>
    <tr>
        <td>Skill</td>
        <td>:</td>
        <td><?php 
foreach($skill as $s){ ?>
<?= $s ?> | 
<?php } ?></td>
    </tr>
    <tr>
        <td>Skor Skill</td>
        <td>:</td>
        <td><?php
        if(isset($_POST["proses"])){
            $kotak_centang = $_POST["skill"];
            $total_skor = 0;
            foreach($kotak_centang as $kc){
                $total_skor += $arr_skill[$kc];
            }
            echo "$total_skor";
        }
        ?></td>
    </tr>
    <?php
        function hitungKategori($total_skor){
            if($total_skor >= 0 && $total_skor < 10)return "Tidak Memadai";
            elseif($total_skor >= 10 && $total_skor < 50)return "Kurang";
            elseif($total_skor >= 50 && $total_skor < 80)return "Medium";
            elseif($total_skor >= 80 && $total_skor < 120)return "Bagus";
            elseif($total_skor >= 120)return "Mahir";
            else return "";
        }
        $predikat = hitungKategori($total_skor);
    ?>
    <tr>
        <td>Kategori Skill</td>
        <td>:</td>
        <td><?= $predikat ?></td>
    </tr>
    <tr>
        <td>Domisili</td>
        <td>:</td>
        <td><?= $domisili ?></td>
    </tr>
</table>

<style>
.menu{
    margin-left:auto;
    margin-right:auto;
}

table tr {
    align-items: center;
    text-align: center;
    align-content: center;
}

.desain {
    width: 80%;
    height: 30px;
    border-radius: 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-style: oblique;
    margin-left: 5px;
    text-align: center;
    font-size: 1rem;
}

th{
    font-size: 2.5rem;
    margin-bottom: 25px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

legend{
    font-size: 3rem;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

button {
    background-color: #00CD00;
    color: white;
    font-size: 1rem;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    box-shadow: 0px 6px 12px 0px rgba(12, 100, 50, 1);
    border-radius: 8px;
    border: none;
    padding: 10px 20px;
    margin-top: 20px;
    margin-bottom: 20px;
    text-align: center;
    cursor: pointer;
}

button:hover {
    background-color: #4EFF00;
}

button:active {
    background-color: #7AFFED;
    transform: translateY(3px);
}

button.tombol:after {
    display: inline-block;
    width: 60px;
    height: 30px;
    border-radius: 50%;
    border: 2px solid white;
    border-top-color: transparent;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    to {
        transform: rotate(360deg);
    }
}

.latar{
    background-color: #4EFF00;
    background-size: cover;
    margin-left:auto;
    margin-right:auto;
    font-size: 1.5rem;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    border-radius:20px;
    margin-top:2vh;
}

.bar{
    width: 80%;
    height: 30px;
    border-radius: 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-style: oblique;
    margin-left: 5px;
    text-align: center;
    font-size: 1rem;
}

.tampilan{
    border-radius: 10px;  
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-style: oblique;
}
</style>