<?php

class c_koneksi {

    public function conn() {
        $conn = mysqli_connect("localhost" ,"root", "", "galery");
        return $conn;
    }
}
?>