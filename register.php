<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GALLERY</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="text-center">Register</h3>
                <form action="routers/r_login.php?aksi=register" method="post">
                  <div class="form-group">
                  <div class="form-group">
                    <input type="email" class="form-control p_input" id="userid" name="userid" hidden>
                  </div>
                    <label>Username</label>
                    <input type="text" class="form-control p_input" id="username" placeholder="Username" name="username" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control p_input" id="password" placeholder="Password" name="password" required>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control p_input" id="email" placeholder="Email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control p_input" id="namalengkap" placeholder= "Fullname" name="namalengkap" required> 
                  </div>
                  <div class="form-group">
                    <label>Addres</label>
                    <input type="text" class="form-control p_input" id="alamat" placeholder="Address" name="alamat" required>
                  </div>
                  <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control p_input" name="jeniskelamin" required>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="register" class="btn btn-primary btn-block enter-btn">SIGN UP</button>
                  </div>
                  </form>
                  <p class="sign-up text-center">Already have an Account?<a href="index.php"> Sign In</a></p>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>