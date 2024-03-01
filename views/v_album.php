<?php

include_once "../controllers/c_login.php";
include_once "../controllers/c_album.php";
include_once "homealbum.php";

$baru = new c_album();
?>

<body>
  <?php if (empty($baru->costum($_SESSION['userid']))) {
    echo '<h1 class="text-secondary"> Kamu Tidak Memiliki Album';
  } else {  ?>
    <?php foreach ($baru->read() as $read) : ?>
      <?php if($_SESSION['userid'] == $read->userid) : ?>
      <div class="card">
        <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
          <div class="item">
          </div>
        </div>
        <div class="d-flex py-10">
          <div class="preview-list w-200">
            <div class="preview-item p-02">
              <img src="../assets/images/<?= $read->photo ?>" height="360px" width="260px" style="padding: 10px;" class="img-fluid" alt="">
              <a href="foto.php?albumid=<?= $read->albumid ?>">
                <h2><?= $read->namaalbum ?></h2>
              </a>
              <div class="row">
                <div class="col-lg-12">
                  <ul><span><?= $read->tanggaldibuat ?></span></li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <ul>
                    <?php
                    if ($_SESSION['userid'] ==  $read->userid) {
                    ?>
                      <i class="bi bi-chevron-right"></i>
                      <a class="btn btn-outline-secondary btn-md" href="editalbum.php?albumid=<?= $read->albumid ?>">Edit</a>
                    <?php } ?>
                  </ul>
                </div>
                <div class="col-lg-12">
                  <ul>
                    <?php
                    if ($_SESSION['userid'] ==  $read->userid) {
                    ?>
                      <i class="bi bi-chevron-right"></i>
                      <a class="btn btn-outline-secondary btn-md" href="../routers/r_album.php?albumid=<?= $read->albumid ?>&aksi=delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    <?php } ?>
                  </ul>
                </div>
              </div>
              <p class="py-10">
                <?= $read->deskripsi ?>
              </p>
            </div>
          </div>

        </div>
        <?php endif; ?>
      <?php endforeach; ?>
</body>
<?php } ?>