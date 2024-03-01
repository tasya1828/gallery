<?php

include_once "../controllers/c_komentar.php";
$komen = new c_komentar();

if ($_GET['aksi'] == 'tambah') {
    $komentarid = $_POST['id'];
    $fotoid = $_POST['fotoid'];
    $userid = $_POST['userid'];
    $isikomentar = $_POST['isikomentar'];
    $tanggal = $_POST['tanggal'];

    $komen->insert_komentar($komentarid, $fotoid, $userid, $isikomentar, $tanggal);
    header("location:../views/gallery.php");

} elseif ($_GET['aksi'] == 'delete') {
    $komentarid = $_GET['komentarid'];

    $komen->delete($komentarid);
    header("location: ../views/gallery.php");
}