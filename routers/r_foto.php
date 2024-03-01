<?php
include_once "../controllers/c_foto.php";
$foto = new c_foto();

if ($_GET["aksi"] == "tambah") {
    $fotoid = $_POST["fotoid"];
    $judulfoto = $_POST["judulfoto"];
    $deskripsifoto = $_POST["deskripsifoto"];
    $tanggalunggah= $_POST["tanggalunggah"];

    $lokasifile = $_FILES["lokasifile"]["name"];
    $tmp = $_FILES["lokasifile"]["tmp_name"];

    move_uploaded_file($tmp, '../assets/images/' . $lokasifile);
    
    $albumid= $_POST["albumid"];
    $userid= $_POST["userid"];
    
    $foto->insert($fotoid, $judulfoto, $deskripsifoto, $tanggalunggah, $lokasifile, $albumid, $userid);

    echo "<script> alert('foto berhasil ditambahkan');
    document.location.href = '../views/foto.php?albumid= $albumid ';
    </script>";
    
}elseif ($_GET['aksi'] == 'update') {
    $fotoid = $_POST['fotoid'];
    $albumid = $_POST['albumid'];
    $judulfoto = $_POST['judulfoto'];
    $deskripsifoto = $_POST['deskripsifoto'];

    $foto->update($fotoid, $judulfoto, $deskripsifoto);

    echo "<script> alert('data telah di ubah');
    document.location.href = '../views/foto.php?albumid=$albumid';
    </script>";

}elseif ($_GET["aksi"] == "delete") {
    $fotoid = $_GET['fotoid'];
    $albumid = $_GET['albumid'];

    $foto->delete($fotoid);
    header("location: ../views/foto.php?albumid=$albumid");
}
