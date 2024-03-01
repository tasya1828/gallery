<?php

include_once "../controllers/c_login.php";
$login = new c_login();

if ($_GET['aksi'] == 'register') {
    $userid = $_POST['userid']; 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $namalengkap = $_POST['namalengkap'];
    $alamat = $_POST['alamat'];
    $jeniskelamin = $_POST['jeniskelamin'];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $login->register($userid, $username, $password, $email, $namalengkap, $alamat, $jeniskelamin);

    }elseif ($_GET['aksi'] == 'login') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $login->login($email, $password);
    }elseif ($_GET['aksi'] == 'logout'){
        $login->logout();
    }
    
?>