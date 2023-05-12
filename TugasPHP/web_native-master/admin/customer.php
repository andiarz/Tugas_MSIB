<?php
    include_once 'top.php';
    include_once 'menu.php';
    
$model = new Pelanggan();
$data_pelanggan = $model->dataPelanggan();

$sesi = $_SESSION['MEMBER'];
if(isset($sesi)){

?>
                        <h1 class="mt-4">Tabel Data Pelanggan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>

                        <div class="card mb-4">
                        <div class="card-header">
                                <!-- <i class="fas fa-table me-1"></i>
                                DataTable Example -->
                                <!-- membuat tombol mengarahkan ke file produk_form.php -->
                                <?php
                                if($sesi['role']!='staff'){ ?>
                                    <a href="index.php?url=pelanggan_form" class="btn btn-primary btn-sm"> Tambah</a>
                                <?php } ?>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Email</th>
                                            <th>ID Kartu</th>   
                                            <th>Action</th>                                       
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Email</th>
                                            <th>ID Kartu</th>   
                                            <th>Action</th> 
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($data_pelanggan as $row){

                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['kode']?></td>
                                            <td><?= $row['nama']?></td>
                                            <td><?= $row['jk']?></td>
                                            <td><?= $row['tmp_lahir']?></td>
                                            <td><?= $row['tgl_lahir']?></td>
                                            <td><?= $row['email']?></td>
                                            <td><?= $row['kartu_id']?></td>
                                            <td>
                                                <form action="produk_controller.php" method="POST">
                                                    <a class="btn btn-info btn-sm" href="index.php?url=pelanggan_detail&id=<?= $row ['id'] ?>">Detail</a>
                                                    <?php     
                                                if($sesi['role']=='admin'){
                                                    ?>
                                                    <a class="btn btn-warning btn-sm" href="index.php?url=pelanggan_form&idedit=<?= $row ['id'] ?>">Ubah</a>
                                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Yakin ingin Menghapusnya?')">Hapus</button>

                                                    <input type="hidden" name="idx" value="<?= $row['id']?>">
                                                    <?php } ?>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php 
                                        $no++;
                                        }
                                        ?>                                        
                                    </tbody>
                                </table>
                            </div>

</div>
</div>

<?php
                }else{
                    echo '<script> alert("Anda Tidak Boleh Masuk!");history.back();</script>';
                };
        // include_once 'bottom.php';
                ?>