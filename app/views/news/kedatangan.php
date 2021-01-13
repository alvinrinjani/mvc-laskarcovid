<div class="container-fluid">
  <h1 class="mt-4"><strong>News & Info</strong></h1>
  <hr>
  <a href="<?= BASEURL; ?>/news/kesehatan" class="badge badge-warning">Data Kesehatan</a>
  <a href="<?= BASEURL; ?>/news/kedatangan" class="badge badge-success">Data Kedatangan Santri</a>

  <ul class="list-group mt-3 col-6">
    <?php foreach ($data['testing'] as $test) : ?>
      <li class="list-group-item d-flex justify-content-between align-items-center"><?= $test['nama']; ?>
        <a href="<?= BASEURL; ?>/testing/detail/<?= $test['id']; ?>" class="badge badge-primary">Detail</a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>