<?php
include_once 'koneksi.php';
include_once 'models/Jenis_Produk.php';

//step pertama yaitu menangkap request form
$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];

//menangkapan form diatas dijadikan array
$data = [
    $nama,
    $keterangan
];
$model = new JenisProduk();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan':$model->simpan($data); break;
    case 'ubah':
        $data[] = $_POST['idx']; $model->ubah($data);break;
    case 'hapus':
        unset($data);
        $model->hapus($_POST['idx']);break;
    default:
    header('Location:index.php?url=jenis_produk');
    break;
}
header('Location:index.php?url=jenis_produk');

?>
