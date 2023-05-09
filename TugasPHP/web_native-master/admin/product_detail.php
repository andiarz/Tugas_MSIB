<?php
$id = $_REQUEST['id'];
$model = new Produk();
$produk = $model->getProduk($id);

?>

<div>
    <h3><?= $produk['kode'] ?> </h3>
    <h3><?= $produk['nama'] ?> </h3>
    <h3><?= $produk['harga_beli'] ?> </h3>
    <h3><?= $produk['harga_jual'] ?> </h3>
    <h3><?= $produk['stok'] ?> </h3>
    <h3><?= $produk['min_stok'] ?> </h3>
    <h3><?= $produk['jenis_produk_id'] ?> </h3>
</div>