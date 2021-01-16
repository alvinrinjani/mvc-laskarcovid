<div class="container-fluid">
  <h1 class="mt-4"><strong>Input Data</strong></h1>
  <hr>

  <div class="col-sm-6">
    <?php Flasher::flash(); ?>
  </div>

  <a href="<?= BASEURL; ?>/input/kedatangan" class="badge badge-success">Kedatangan</a>
  <a href="<?= BASEURL; ?>/input/kesehatan" class="badge badge-warning">Kesehatan</a>
  <a href="<?= BASEURL; ?>/input/sakit" class="badge badge-danger">Sakit</a>

  <form action="<?= BASEURL; ?>/input/inputSakit" method="post" class="m-3">
    <input type="hidden" name="tanggal" id="tanggal" value="<?= date('l, d F Y'); ?>">
    <div class="form-group row">
      <label for="nama_sakit" class="col-sm-2 col-form-label h4">Nama Santri Sakit</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="nama_sakit" name="nama_sakit" autofocus>
      </div>
    </div>
    <div class="form-group row">
      <label for="kelas" class="col-sm-2 col-form-label h4">Kelas</label>
      <div class="col-sm-4">
        <select class="form-control" id="kelas" name="kelas">
          <option value="Shoul-Lin 1A">Shoul-Lin 1A</option>
          <option value="Shoul-Lin 1B">Shoul-Lin 1B</option>
          <option value="PRISTAC Matrikulasi">PRISTAC Matrikulasi</option>
          <option value="PRISTAC 1">PRISTAC 1</option>
          <option value="PRISTAC 2">PRISTAC 2</option>
          <option value="ATCO">ATCO</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="diagnosa" class="col-sm-2 col-form-label h4">Diagnosa</label>
      <div class="col-sm-4">
        <textarea type="text" class="form-control" id="diagnosa" name="diagnosa"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="penanganan" class="col-sm-2 col-form-label h4">Penanganan</label>
      <div class="col-sm-4">
        <textarea type="text" class="form-control" id="penanganan" name="penanganan"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="lapor">Lapor Santri Sakit</button>
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