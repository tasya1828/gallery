<?php

include_once "../controllers/c_like.php";
$like = new c_like();

date_default_timezone_set('Asia/Jakarta');
$tanggallike = date("Y-m-d H:i:s");

if ($_GET['aksi'] == 'tambah') {
    $userid = $_GET['userid'];
    $fotoid = $_GET['fotoid'];

    $like->like($likeid, $fotoid, $userid, $tanggallike);

    header("location: ../views/gallery.php");

}elseif ($_GET['aksi'] == 'delete') {
    $userid = $_GET['userid'];
    
    $like->delete_like($userid);
    header("location: ../views/gallery.php");
}