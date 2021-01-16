<div class="container-fluid">
  <h1 class="mt-4"><strong>Input Data</strong></h1>
  <hr>
  <a href="<?= BASEURL; ?>/input/kedatangan" class="badge badge-success">Kedatangan</a>
  <a href="<?= BASEURL; ?>/input/kesehatan" class="badge badge-warning">Kesehatan</a>
  <a href="<?= BASEURL; ?>/input/sakit" class="badge badge-danger">Sakit</a>


  <form action="<?= BASEURL; ?>/input/inputDatang" method="post" class="m-3">
    <input type="hidden" name="waktu" id="waktu" value="<?= date('l, H:i'); ?>">
    <div class="form-group row">
      <label for="nama" class="col-sm-1 col-form-label h4">Nama</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="nama" name="nama" autofocus>
      </div>
    </div>
    <div class="form-group row">
      <label for="keterangan" class="col-sm-1 col-form-label h4">Keterangan</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="keterangan" name="keterangan">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit">Tambah Data Kedatangan</button>
      </div>
    </div>
  </form>
  <!-- <h3>Jadwal Kedatangan Santri PRISTAC 1</h3>
  <p>
    <em>
      Jum'at - Ahad, 8 s/d 10 Januari 2021.
    </em>
  </p> -->
</div>