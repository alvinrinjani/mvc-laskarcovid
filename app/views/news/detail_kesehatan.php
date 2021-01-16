<div class="container-fluid">
  <h1 class="mt-4"><strong>News & Info</strong></h1>
  <hr>
  <a href="<?= BASEURL; ?>/news/kesehatan" class="badge badge-warning">Data Kesehatan Santri</a>
  <a href="<?= BASEURL; ?>/news/kedatangan" class="badge badge-success">Data Kedatangan Santri</a>
  <hr>
  <h3><?= $data['dataSakit']['tanggal']; ?></h3>

  <div class="card mt-3" style="width: 35rem;">
    <div class="card-body">
      <h4 class="card-subtitle mb-2 text-muted">Nama Santri Sakit : <?= $data['dataSakit']['nama_sakit']; ?></h4>
      <p class="card-text">Kelas : <?= $data['dataSakit']['kelas']; ?></p>
      <p class="card-text">Diangnosa : <?= $data['dataSakit']['diagnosa']; ?></p>
      <p class="card-text">Penanganan : <?= $data['dataSakit']['penanganan']; ?></p>
      <a href="<?= BASEURL; ?>/news/kesehatan" class="card-link">Back</a>
    </div>
  </div>
  </ul>
</div>