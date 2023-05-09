<?php
$id = $_REQUEST['id'];
$model = new Kartu();
$kartu = $model->getKartu($id);

?>

<div>
    <h3><?= $kartu['kode'] ?> </h3>
    <h3><?= $kartu['nama'] ?> </h3>
    <h3><?= $kartu['diskon'] ?> </h3>
    <h3><?= $kartu['iuran'] ?> </h3>
</div>