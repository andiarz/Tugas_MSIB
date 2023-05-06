<?php
    include_once 'top.php';
    include_once 'menu.php';
    
$model = new Pesanan();
$data_pesanan = $model->dataPesanan();

?>
                        <h1 class="mt-4">Tabel Data Pemesanan</h1>
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
                                            <th>Tanggal Pemesanan</th>
                                            <th>Total Pesan</th>
                                            <th>ID Pelanggan</th>                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($data_pesanan as $row){

                                        
                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['tanggal']?></td>
                                            <td><?= $row['total']?></td>
                                            <td><?= $row['pelanggan_id']?></td>
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