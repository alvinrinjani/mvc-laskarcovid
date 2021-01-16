<div class="container-fluid">
  <h1 class="mt-4"><strong>News & Info</strong></h1>
  <hr>
  <a href="<?= BASEURL; ?>/news/kesehatan" class="badge badge-warning">Data Kesehatan Santri</a>
  <a href="<?= BASEURL; ?>/news/kedatangan" class="badge badge-success">Data Kedatangan Santri</a>
  <hr>
  <h3>Info Kesehatan Santri At-Taqwa</h3>
  <ul class="list-group col-sm-4">
    <?php foreach ($data['dataSakit'] as $dtSkt) : ?>
      <li class="list-group-item d-flex justify-content-between align-items-center"><?= $dtSkt['tanggal']; ?>
        <a href="<?= BASEURL; ?>/news/detailKesehatan/<?= $dtSkt['id']; ?>" class="badge badge-warning">Detail</a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>