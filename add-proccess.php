<?php
include "koneksi.php";
if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $npm = $_POST['npm'];
    $kodemk = $_POST['kodemk'];

    $query = mysqli_query($koneksi, "INSERT INTO krs(id, mahasiswa_npm, matakuliah_kodemk) 
                                    VALUES ('$id', (SELECT npm FROM mahasiswa WHERE npm='$npm'),
                                    (SELECT kodemk FROM matakuliah WHERE kodemk='$kodemk'))");
    if ($query) {
        $message = "Data berhasil ditambahkan";
        $message = urlencode($message);
        header("Location:index.php?message={$message}");
    } else {
        $message = "Data gagal ditambahkan";
        $message = urlencode($message);
        header("Location:add.php?message={$message}");
    }
}
