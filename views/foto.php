<?php

include_once "../controllers/c_album.php";
include_once "../controllers/c_foto.php";
include_once "../controllers/c_login.php";
include_once "template/header.php";
include_once "homefoto.php";


$baru = new c_album();
$foto = new c_foto();
?>

<body>
  <?php foreach ($baru->edit($_GET['albumid']) as $read) : ?>
      <div class="continer">
        <h4>Album : <?= $read->namaalbum ?></h4>
        <p><?= $read->deskripsi ?></p>
        <a class="btn btn-outline-secondary btn-md" href="tambahfoto.php?albumid=<?php echo $_GET['albumid']; ?>">Tambah Foto</a>
      </div>
    <?php endforeach; ?>
    <?php if (empty($foto->read($_GET['albumid']))) {
      echo '<h1 class="text-secondary">Album Ini Kosong';
    } else {  ?>
      <div class="card">
        <?php foreach ($foto->read($_GET['albumid']) as $read) : ?>
          <div class="card">
            <div class="preview-list w-200">
              <div class="preview-item p-02">
                <div class="d-flex py-10">
                  <div class="preview-list w-200">
                    <div class="preview-item p-02">
                      <div class="row">
                        <img src="../assets/images/<?= $read->lokasifile ?>" height="360px" width="260px" style="padding: 10px;" class="img-fluid" alt="">
                          <h2><?= $read->judulfoto ?></h2>
                        </a>
                        <div class="col-lg-100">
                          <ul><span><?= $read->tanggalunggah ?></span></li>
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
                              <a class="btn btn-outline-secondary btn-md" href="editfoto.php?fotoid=<?= $read->fotoid ?>">Edit</a>
                            <?php } ?>
                          </ul>
                        </div>
                        <div class="col-lg-12">
                          <ul>
                            <?php
                            if ($_SESSION['userid'] ==  $read->userid) {
                            ?>
                              <i class="bi bi-chevron-right"></i>
                              <a class="btn btn-outline-secondary btn-md" href="../routers/r_foto.php?fotoid=<?= $read->fotoid ?>&albumid=<?= $read->albumid ?>&aksi=delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                      <p class="py-10">
                        <?= $read->deskripsifoto ?>
                      </p>
                    </div>
                  </div>
                </div> 
              </div>
            <?php endforeach; ?>
            </div>
          <?php } ?>
          </div>
      </div>
</body>