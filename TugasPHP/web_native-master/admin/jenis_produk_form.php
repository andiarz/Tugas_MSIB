<br>
<?php
$obj_jenis_produk = new JenisProduk();
$jenis_produk = $obj_jenis_produk->JenisProduk();
$idedit = $_REQUEST['idedit'];
$jpr = !empty($idedit) ? $obj_jenis_produk->getJenisProduk($idedit) : array();

?>
<form action="jenis_produk_controller.php" method="POST">
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Jenis Produk</label> 
        <div class="col-8">
          <input id="nama" name="nama" type="text" class="form-control" value="<?=$jpr['nama']?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Keterangan</label> 
        <div class="col-8">
          <input id="keterangan" name="keterangan" type="text" class="form-control" value="<?=$jpr['keterangan']?>">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
        <?php
          if(empty($idedit)){
          ?>
          <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
            <?php
            }else{
              ?>
              <button name="proses" type="submit" value="ubah" class="btn btn-primary">Update</button>
              <input type="hidden" name="idx" value="<?= $idedit?>">
            <?php
            }
            ?>
          <button name="proses" type="submit" value="batal" class="btn btn-primary">Cancel</button>
        </div>
      </div>
    </form>