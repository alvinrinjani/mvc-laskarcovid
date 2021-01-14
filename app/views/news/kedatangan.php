<div class="container-fluid">
  <h1 class="mt-4"><strong>News & Info</strong></h1>
  <hr>
  <a href="<?= BASEURL; ?>/news/kesehatan" class="badge badge-warning">Data Kesehatan</a>
  <a href="<?= BASEURL; ?>/news/kedatangan" class="badge badge-success">Data Kedatangan Santri</a>
  <hr>
  <h3>Info Kedatangan Santri PRISTAC 1</h3>

  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Waktu Kedatangan</th>
        <th scope="col">Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($data['testing'] as $test) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td><?= $test['nama']; ?></td>
          <td><?= $test['date']; ?></td>
          <td><?= $test['keterangan']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>



</div>