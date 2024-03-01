<?php 

include_once "c_koneksi.php";

class c_like {
    public function like($likeid, $fotoid, $userid, $tanggallike) {
        $conn = new c_koneksi();
        $query = mysqli_query($conn->conn(), "INSERT INTO likefoto VALUES('$likeid', '$fotoid', '$userid', '$tanggallike')");
    }

    public function user($fotoid, $likeid) {
        $conn = new c_koneksi();
        $query = mysqli_query($conn->conn(), "SELECT * FROM likefoto WHERE fotoid = $fotoid AND userid = $likeid");
        $data = mysqli_num_rows($query);
        return $data;
    }

    public function delete_like($userid) {
        $conn = new c_koneksi();
        $query = mysqli_query($conn->conn(), "DELETE FROM likefoto WHERE userid = $userid");
    }
    
    public function jumlah($fotoid) {
        $conn = new c_koneksi();
        $query = mysqli_query($conn->conn(), "SELECT * FROM likefoto WHERE fotoid = $fotoid");
        $data = mysqli_num_rows($query);
        return $data;
    }
}    