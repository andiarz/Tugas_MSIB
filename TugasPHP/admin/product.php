<?php
    include_once 'top.php';
    include_once 'menu.php';
    
$model = new Produk();
$data_produk = $model->dataProduk();

?>
                        <h1 class="mt-4">Tabel Data Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Produk</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Jenis Produk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($data_produk as $row){

                                        
                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['kode']?></td>
                                            <td><?= $row['nama']?></td>
                                            <td><?= $row['harga_beli']?></td>
                                            <td><?= $row['harga_jual']?></td>
                                            <td><?= $row['stok']?></td>
                                            <td><?= $row['min_stok']?></td>
                                            <td><?= $row['jenis_produk_id']?></td>
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
        // include_once 'bottom.php';
                ?>