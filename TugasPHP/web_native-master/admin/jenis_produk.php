<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new JenisProduk();
$jenis_produk = $model->JenisProduk();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }
$sesi = $_SESSION['MEMBER'];
if(isset($sesi)){

?>
                        <h1 class="mt-4">Tabel Data Jenis Produk</h1>
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
                                <a href="index.php?url=jenis_produk_form" class="btn btn-primary btn-sm"> Tambah</a>                                
                                <?php } ?>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama </th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Keterangan</th>   
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <!-- hapus dari baris 64 sampai 511 -->
                                        <!-- dari <tr> ke </tr> -->
                                        <?php
                                        $no = 1;
                                        foreach($jenis_produk as $row){

                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama']?></td>
                                            <td><?= $row['keterangan']?></td>
                                            <td>
                                                <form action="produk_controller.php" method="POST">
                                                    <a class="btn btn-info btn-sm" href="index.php?url=jenis_produk_detail&id=<?= $row ['id'] ?>">Detail</a>
                                                    <?php     
                                                if($sesi['role']=='admin'){
                                                    ?>
                                                    <a class="btn btn-warning btn-sm" href="index.php?url=jenis_produk_form&idedit=<?= $row ['id'] ?>">Ubah</a>
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