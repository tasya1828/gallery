<?php
include_once "c_koneksi.php";
class c_foto
{
    public function insert($fotoid, $judulfoto, $deskripsifoto, $tanggalunggah, $lokasifile, $albumid, $userid)
    {
        $conn = new c_koneksi();
        $query = "INSERT INTO foto VALUES ('$fotoid', '$judulfoto', '$deskripsifoto', '$tanggalunggah', '$lokasifile', '$albumid', '$userid')";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function read($albumid)
    {
        $conn = new c_koneksi();
        //perintah mengambil semua data dari foto dan mengurutkan sesuai data terbaru diatas
        $query = "SELECT * FROM foto WHERE albumid='$albumid' ORDER BY fotoid DESC";
        $data = mysqli_query($conn->conn(), $query);

        //mengubah query data menjadi objek
        while ($row = mysqli_fetch_object($data)) {
            // array kosong untuk menampung data objek
            $rows[] = $row;
        }

        //mengembalikan nilai
        if (!empty($rows)) {
            return $rows;
        }
    }
    public function read1($fotoid)
    {
        $conn = new c_koneksi();
        $query = "SELECT * FROM foto WHERE fotoid='$fotoid'";
        $data = mysqli_query($conn->conn(), $query);

        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }

        if (!empty($rows)) {
            return $rows;
        }
    }
    public function home()
    {
        $conn = new c_koneksi();
        $query = "SELECT foto.*, user.* FROM foto INNER JOIN user ON foto.userid = user.userid";
        $data = mysqli_query($conn->conn(), $query);

        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }

        if (!empty($rows)) {
            return $rows;
        }
    }

    public function edit($id) {
        $conn = new c_koneksi();
        $query = mysqli_query($conn->conn(), "SELECT * FROM foto WHERE fotoid = $id");
        while($row = mysqli_fetch_object($query)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function update($fotoid, $judulfoto, $deskripsifoto) {
        $conn = new c_koneksi();
        $query = mysqli_query($conn->conn(), "UPDATE foto SET judulfoto='$judulfoto', deskripsifoto='$deskripsifoto' WHERE fotoid = $fotoid");
    }

    public function delete($fotoid) {
        $conn = new c_koneksi();
        $query = mysqli_query($conn->conn(), "DELETE FROM foto WHERE fotoid = $fotoid");
    }
}
