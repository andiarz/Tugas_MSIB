<?php
$id = $_REQUEST['id'];
$model = new JenisProduk();
$jenis_produk = $model->getJenisProduk($id);

?>

<div>
    <h3><?= $produk['nama'] ?> </h3>
    <h3><?= $produk['keterangan'] ?> </h3>
</div>