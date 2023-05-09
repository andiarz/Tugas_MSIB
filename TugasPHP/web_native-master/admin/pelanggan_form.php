<br>
<?php
$obj_pelanggan = new Pelanggan();
$datapelanggan = $obj_pelanggan->dataPelanggan();

?>
<form action="pelanggan_controller.php" method="POST">
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Kode Pelanggan</label> 
        <div class="col-8">
          <input id="kode" name="kode" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Nama Pelanggan</label> 
        <div class="col-8">
          <input id="nama" name="nama" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Jenis Kelamin</label> 
        <div class="col-8">
          <input id="jk" name="jk" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Tempat Lahir</label> 
        <div class="col-8">
          <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text4" class="col-4 col-form-label">Tanggal Lahir</label> 
        <div class="col-8">
          <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text5" class="col-4 col-form-label">Email</label> 
        <div class="col-8">
          <input id="email" name="email" type="email" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text6" class="col-4 col-form-label">ID Kartu</label> 
        <div class="col-8">
          <input id="kartu_id" name="kartu_id" type="number" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>