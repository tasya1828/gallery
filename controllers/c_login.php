<?php
SESSION_START();
include_once "c_koneksi.php";

class c_login{
    public function register($userid, $username, $password, $email, $namalengkap, $alamat, $jeniskelamin)
    {
        $conn = new c_koneksi();
        if (isset($_POST['register'])){
            $cek = mysqli_query($conn->conn(),  "SELECT * FROM user WHERE email ='$email' OR username ='$username'");
            $data = mysqli_num_rows($cek);
            if ($data > 0) {
                echo "<script> alert('email/username sudah terdaftar');
                document.location.href = '../register.php';
                </script>";
            }else{
                $query = mysqli_query($conn->conn(), "INSERT INTO user VALUES ('$userid', '$username', '$password', '$email', '$namalengkap', '$alamat', '$jeniskelamin')");
                    
            header("location: ../index.php");
            exit();
            } 
        }
}

    public function login($email, $password)
    {
        $conn = new c_koneksi();
        if (isset($_POST['login'])) {
            $query = mysqli_query($conn->conn(), "SELECT * FROM user WHERE email ='$email'");
            $data = mysqli_fetch_array($query);
            if ($data) {
                if (password_verify($password, $data['password'])) {
                    $_SESSION['data'] = $data;
                    $_SESSION['userid'] = $data['userid'];
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['namalengkap'] = $data['namalengkap'];
                    $_SESSION['alamat'] = $data['alamat'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['jeniskelamin'] = $data['jeniskelamin'];
                
                    header("location: ../views/home.php");
                    exit;
                    
                } else {
                  echo "<script> alert('password anda salah');
                document.location.href = '../index.php';
                </script>";
            }
                }else {
                    echo "<script> alert('username / email anda salah');
                    document.location.href = '../index.php';
                    </script>";
                }
        }
}   public function logout() {
        session_destroy();

        // menghapus/menghancurkan session
        header("location: ../index.php");
        exit;
    } 
}