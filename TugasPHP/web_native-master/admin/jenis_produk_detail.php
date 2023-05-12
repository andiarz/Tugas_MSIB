<?php
$id = $_REQUEST['id'];
$model = new JenisProduk();
$jenis_produk = $model->getJenisProduk($id);

?>

<h1 class="mt-4">Tabel Detail Jenis Produk</h1>
<div class="card-body">
    <div class="card mb-4">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Jenis Produk</th>
                                            <th>Keteragan</th>
    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $jenis_produk['nama']?></td>
                                            <td><?= $jenis_produk['keterangan']?></td>
                                        </tr>
                                    </tbody>
                                    </table>
</div>
</div>