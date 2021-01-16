<div class="container-fluid">
  <h1 class="mt-4"><strong>Gallery</strong></h1>
  <hr>
  <!-- <h3>Jadwal Kedatangan Santri PRISTAC 1</h3>
  <p>
    <em>
      Jum'at - Ahad, 8 s/d 10 Januari 2021.
    </em>
  </p> -->

  <!-- The grid: four columns -->
  <div class="row">
    <div class="column">
      <img src="<?= BASEURL; ?>/img/attaqwa-logo-covid.png" alt="Laskar Covid" class="img-thumbnail" onclick="myFunction(this);">
    </div>
    <div class="column">
      <img src="<?= BASEURL; ?>/img/main-banner.png" alt="Banner Utama" class="img-thumbnail" onclick="myFunction(this);">
    </div>
    <div class="column">
      <img src="<?= BASEURL; ?>/img/gerbang-banner.png" alt="Gerbang Banner" class="img-thumbnail" onclick="myFunction(this);">
    </div>
  </div>
  <!-- The expanding image container -->
  <div class="container">
    <!-- Close the image -->
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

    <!-- Expanded image -->
    <img id="expandedImg" style="width:100%">

    <!-- Image text -->
    <div id="imgtext"></div>
  </div>


</div>