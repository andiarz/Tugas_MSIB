<?php
$id = $_REQUEST['id'];
$model = new Pesanan();
$pesanan = $model->getPesanan($id);

?>

<div>
    <h3><?= $pesanan['tanggal'] ?> </h3>
    <h3><?= $pesanan['total'] ?> </h3>
    <h3><?= $pesanan['pelanggan_id'] ?> </h3>
</div>