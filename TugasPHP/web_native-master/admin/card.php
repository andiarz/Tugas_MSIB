<?php
$model = new Kartu();
$kartu = $model->dataKartu();
?>
                        <h1 class="mt-4">Tabel Data Kartu Member</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        
                        <div class="card mb-4">
                        <div class="card-header">
                                <!-- <i class="fas fa-table me-1"></i>
                                DataTable Example -->
                                <!-- membuat tombol mengarahkan ke file produk_form.php -->
                                <a href="index.php?url=kartu_form" class="btn btn-primary btn-sm"> Tambah</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Diskon</th>
                                            <th>Iuran</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Diskon</th>
                                            <th>Iuran</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($kartu as $row){

                                        
                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['kode']?></td>
                                            <td><?= $row['nama']?></td>
                                            <td><?= $row['diskon']?></td>
                                            <td><?= $row['iuran']?></td>
                                            <td>
                                                <form action="produk_controller.php" method="POST">
                                                    <a class="btn btn-info btn-sm" href="index.php?url=kartu_detail&id=<?= $row ['id'] ?>">Detail</a>
                                                    <a class="btn btn-warning btn-sm" href="index.php?url=kartu_form&idedit=<?= $row ['id'] ?>">Ubah</a>
                                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Yakin ingin Menghapusnya?')">Hapus</button>

                                                    <input type="hidden" name="idx" value="<?= $row['id']?>">
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
        // include_once 'bottom.php';
                ?>
