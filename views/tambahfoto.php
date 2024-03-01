<?php

SESSION_START();
include_once "../controllers/c_foto.php";

date_default_timezone_set('Asia/jakarta');
$tanggal = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GALLERY</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                  <h3 class="text-center">Tambah Foto</h3>
                 <form action="../routers/r_foto.php?aksi=tambah" method="post" enctype="multipart/form-data">

                <div class="mb-1">
                    <input type="id" class="form-control" name="fotoid" id="fotoid" hidden>
                </div>

                <div class="form-group">
                    <label>Judul Foto</label>
                    <input type="text" class="form-control p_input" id="judulfoto" name="judulfoto" required>
                </div>

                <div class="form-group">
                    <label>Deskripsi Foto</label>
                    <textarea class="form-control p_input" id="deskripsifoto" rows="4" name="deskripsifoto" required></textarea>
                </div>

                <div class="form-group">
                    <input type="datetime-local" class="form-control p_input" id="tanggalunggah" value="<?= $tanggal ?>" name="tanggalunggah" hidden>
                </div>

                <div class="form-group">
                    <input type="file" class="form-control" name="lokasifile" id="lokasifile" aria-describedby="textHelp" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user"  id="albumid" value="<?php echo $_GET['albumid'];?>" name="albumid" hidden>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user"  id="userid" value="<?= $_SESSION['userid'] ?>" name="userid" hidden>
                </div>

                <button type="submit" class="btn btn-outline-secondary btn-lg btn-block">Tambah</button>
                  <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>