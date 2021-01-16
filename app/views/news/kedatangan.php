<div class="container-fluid">
  <h1 class="mt-4"><strong>News & Info</strong></h1>
  <hr>
  <a href="<?= BASEURL; ?>/news/kesehatan" class="badge badge-warning">Data Kesehatan Santri</a>
  <a href="<?= BASEURL; ?>/news/kedatangan" class="badge badge-success">Data Kedatangan Santri</a>
  <hr>
  <h3>Info Kedatangan Santri PRISTAC 1</h3>

  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>

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
          <td><?= $test['waktu']; ?></td>
          <td><?= $test['keterangan']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>


</div>